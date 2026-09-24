<?php
/**
 * "Under Construction" page with the password form. Shown by gate.php.
 * Expects $gateError (bool).
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title><?= e(SITE['name']) ?> | Under Construction</title>
    <link rel="icon" href="assets/img/favicon.png" type="image/png">
    <link rel="stylesheet" href="assets/css/custom-fonts.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap">
    <style>
        :root {
            --primary: #ee9c25;
            --navy: #0c1c24;
            --navy-2: #13262f;
            --text: rgba(255, 255, 255, 0.72);
        }
        * { box-sizing: border-box; }
        html, body { height: 100%; }
        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            color: #fff;
            font-family: "Plus Jakarta Sans", system-ui, -apple-system, "Segoe UI", sans-serif;
            background-color: var(--navy);
            /* blueprint grid */
            background-image:
                linear-gradient(rgba(255, 255, 255, 0.035) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.035) 1px, transparent 1px),
                radial-gradient(circle at 80% 10%, rgba(238, 156, 37, 0.16), transparent 45%),
                radial-gradient(circle at 10% 90%, rgba(238, 156, 37, 0.08), transparent 40%);
            background-size: 48px 48px, 48px 48px, auto, auto;
            overflow-x: hidden;
        }
        .uc-wrap {
            flex: 1;
            width: 100%;
            max-width: 1180px;
            margin: 0 auto;
            padding: 40px 24px;
            display: flex;
            flex-direction: column;
        }
        .uc-logo img { width: 230px; height: auto; display: block; }
        .uc-main {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 48px 0;
        }
        .uc-badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            align-self: flex-start;
            padding: 8px 16px;
            border-radius: 50px;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: var(--primary);
            background: rgba(238, 156, 37, 0.1);
            border: 1px solid rgba(238, 156, 37, 0.35);
        }
        .uc-badge span {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--primary);
            animation: pulse 1.6s ease-in-out infinite;
        }
        @keyframes pulse {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.35; transform: scale(0.7); }
        }
        .uc-title {
            margin: 28px 0 0;
            font-family: "topluxury", Georgia, serif;
            font-weight: 400;
            font-size: clamp(54px, 8vw, 116px);
            line-height: 0.95;
            letter-spacing: -0.02em;
        }
        .uc-title em {
            font-style: normal;
            color: var(--primary);
        }
        .uc-text {
            max-width: 560px;
            margin: 28px 0 0;
            font-size: 18px;
            line-height: 1.7;
            color: var(--text);
        }
        .uc-form {
            margin-top: 36px;
            max-width: 520px;
        }
        .uc-label {
            display: block;
            margin-bottom: 12px;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            color: rgba(255, 255, 255, 0.55);
        }
        .uc-field {
            display: flex;
            gap: 8px;
            padding: 8px;
            border-radius: 100px;
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.14);
            transition: border-color 0.3s, background-color 0.3s;
        }
        .uc-field:focus-within {
            border-color: var(--primary);
            background: rgba(255, 255, 255, 0.09);
        }
        .uc-field.has-error { border-color: #ff6b6b; }
        .uc-field input {
            flex: 1;
            min-width: 0;
            padding: 0 20px;
            border: 0;
            outline: 0;
            font: inherit;
            font-size: 16px;
            color: #fff;
            background: transparent;
        }
        .uc-field input::placeholder { color: rgba(255, 255, 255, 0.4); }
        .uc-field button {
            flex-shrink: 0;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 15px 28px;
            border: 0;
            border-radius: 100px;
            font: inherit;
            font-size: 15px;
            font-weight: 700;
            letter-spacing: 0.04em;
            text-transform: uppercase;
            color: #fff;
            background: var(--primary);
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
        }
        .uc-field button:hover { background: #d98a17; }
        .uc-field button:active { transform: scale(0.97); }
        .uc-error {
            margin: 12px 0 0 20px;
            font-size: 14px;
            color: #ff8a8a;
        }
        .uc-footer {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 16px;
            padding-top: 28px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 15px;
            color: rgba(255, 255, 255, 0.55);
        }
        .uc-footer a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s;
        }
        .uc-footer a:hover { color: var(--primary); }
        .uc-contact { display: flex; flex-wrap: wrap; gap: 28px; }
        @media (max-width: 575px) {
            .uc-logo img { width: 170px; }
            .uc-field { flex-direction: column; border-radius: 24px; }
            .uc-field input { padding: 14px 16px; }
            .uc-field button { justify-content: center; }
            .uc-text { font-size: 16px; }
        }
    </style>
</head>
<body>
    <div class="uc-wrap">
        <header class="uc-logo">
            <img src="assets/img/logo/logo-white.png" alt="<?= e(SITE['name']) ?>">
        </header>

        <main class="uc-main">
            <div class="uc-badge"><span></span> Website under construction</div>
            <h1 class="uc-title">We're Building <br>Something <em>Great</em></h1>
            <p class="uc-text">
                Our new website is on its way. In the meantime, we're still taking on
                estimating and 3D rendering projects. Get in touch for a free quote.
            </p>

            <form class="uc-form" method="post" autocomplete="off">
                <label class="uc-label" for="site_password">Have access? Enter password</label>
                <div class="uc-field<?= $gateError ? ' has-error' : '' ?>">
                    <input type="password" id="site_password" name="site_password" placeholder="Password" required>
                    <button type="submit">Enter
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </button>
                </div>
                <?php if ($gateError): ?>
                <p class="uc-error" role="alert">Incorrect password. Please try again.</p>
                <?php endif; ?>
            </form>
        </main>

        <footer class="uc-footer">
            <div class="uc-contact">
                <a href="mailto:<?= e(SITE['email']) ?>"><?= e(SITE['email']) ?></a>
                <a href="tel:<?= e(SITE['phone_tel']) ?>"><?= e(SITE['phone']) ?></a>
            </div>
            <div>&copy; <?= date('Y') ?> <?= e(strtoupper(SITE['name'])) ?>. All rights reserved.</div>
        </footer>
    </div>
</body>
</html>
