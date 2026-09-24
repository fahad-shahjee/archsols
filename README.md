# Archsols

Website for **Archsols — Innovative Architectural Solutions**: construction estimating
(tile, flooring, drywall, paint, countertops, window treatments) and 3D rendering.

## Requirements

- PHP 8.0+ with Apache (e.g. XAMPP). `mod_rewrite` redirects old `.html` links.

## Setup

1. Put the folder in your web root, e.g. `htdocs/archsols`.
2. Copy `includes/secret.example.php` to `includes/secret.php` and set the site password.
3. Open `http://localhost/archsols/`.

## Where to edit

| What | File |
|---|---|
| Phone, email, address, services, under-construction lock | `includes/config.php` |
| Site password (not in git) | `includes/secret.php` |
| Header, menu, footer | `includes/header.php`, `includes/footer.php` |
| Under-construction page | `includes/under-construction.php` |
| Brand styles (color `#ee9c25`) | `assets/css/archsols.css` |

Set `SITE_LOCKED` to `false` in `includes/config.php` when the site goes live.
