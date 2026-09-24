<?php
/**
 * Password gate: while SITE_LOCKED is true, only visitors who entered
 * SITE_PASSWORD can see the website. Everyone else gets the
 * "Under Construction" page.
 *
 * Log out: add ?logout to any page URL (e.g. index.php?logout).
 */
require_once __DIR__ . '/config.php';

if (!SITE_LOCKED) {
    return;
}

session_set_cookie_params([
    'lifetime' => 60 * 60 * 24 * 30, // remember for 30 days
    'path'     => '/',
    'httponly' => true,
    'samesite' => 'Lax',
    'secure'   => !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off',
]);
session_name('archsols_access');
session_start();

// Unlock is tied to the current password, so changing it logs everyone out.
$accessKey = hash('sha256', SITE_PASSWORD);

if (isset($_GET['logout'])) {
    $_SESSION = [];
    session_destroy();
    header('Location: ' . strtok($_SERVER['REQUEST_URI'], '?'));
    exit;
}

if (($_SESSION['access'] ?? '') === $accessKey) {
    return;
}

$gateError = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['site_password'])) {
    if (SITE_PASSWORD !== '' && hash_equals(SITE_PASSWORD, (string) $_POST['site_password'])) {
        session_regenerate_id(true);
        $_SESSION['access'] = $accessKey;
        // Reload the same page with a GET request
        header('Location: ' . $_SERVER['REQUEST_URI']);
        exit;
    }
    sleep(1); // slow down password guessing
    $gateError = true;
}

http_response_code(503);
header('Retry-After: 86400');
header('X-Robots-Tag: noindex, nofollow');
require __DIR__ . '/under-construction.php';
exit;
