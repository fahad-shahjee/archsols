<?php
/**
 * Archsols site settings.
 * Change contact details and services here — every page reads from this file.
 */

/**
 * Under construction lock.
 *   true  - visitors see the "Under Construction" page and need the password
 *   false - the website is public (set this when you launch)
 */
const SITE_LOCKED = true;

// The password lives in includes/secret.php, which is not uploaded to GitHub.
// On a new server, copy includes/secret.example.php to includes/secret.php and set it there.
if (is_file(__DIR__ . '/secret.php')) {
    require_once __DIR__ . '/secret.php';
}
if (!defined('SITE_PASSWORD')) {
    define('SITE_PASSWORD', ''); // no password set: nobody can unlock the site
}

const SITE = [
    'name'      => 'Archsols',
    'tagline'   => 'Innovative Architectural Solutions',
    'phone'     => '+1 310-555-0143',
    'phone_tel' => '+13105550143',
    'email'     => 'info@archsols.com',
    // HTML allowed (use <br> for line breaks)
    'address'   => 'Market#203 San <br> Francisco, California (CA).',
];

/**
 * Services: used by the menu dropdown, the home page list,
 * the Services page cards and the contact form dropdowns.
 *   id        - anchor on service.php (service.php#id)
 *   img       - image on the Services page   (assets/img/service/)
 *   home_img  - image on the home page list  (assets/img/service/)
 */
const SERVICES = [
    [
        'id'       => 'tile-estimating',
        'name'     => 'Tile Estimating',
        'desc'     => 'Accurate tile quantities and costs for floors, walls and backsplashes.',
        'list'     => ['Floor & Wall Tile', 'Showers & Backsplashes', 'Porcelain & Ceramic', 'Natural Stone', 'Grout, Mortar & Trim'],
        'img'      => 'img11.jpg',
        'home_img' => 'fc-img01.jpg',
    ],
    [
        'id'       => 'flooring-estimating',
        'name'     => 'Flooring Estimating',
        'desc'     => 'Material takeoffs and cost estimates for every flooring type.',
        'list'     => ['Hardwood & Engineered', 'Vinyl & LVT', 'Carpet & Padding', 'Laminate', 'Epoxy & Concrete'],
        'img'      => 'img12.jpg',
        'home_img' => 'fc-img02.jpg',
    ],
    [
        'id'       => 'drywall-estimating',
        'name'     => 'Drywall Estimating',
        'desc'     => 'Board, framing and finishing quantities priced for your bid.',
        'list'     => ['Drywall Sheets', 'Metal & Wood Framing', 'Tape, Mud & Finishing', 'Ceilings & Soffits', 'Insulation'],
        'img'      => 'img13.jpg',
        'home_img' => 'fc-img03.jpg',
    ],
    [
        'id'       => 'paint-estimating',
        'name'     => 'Paint Estimating',
        'desc'     => 'Exact paint quantities and labor for interior and exterior work.',
        'list'     => ['Interior Walls & Ceilings', 'Exterior Surfaces', 'Doors, Trim & Cabinets', 'Primer & Coats', 'Labor Hours'],
        'img'      => 'img14.jpg',
        'home_img' => 'fc-img04.jpg',
    ],
    [
        'id'       => 'countertop-estimating',
        'name'     => 'Countertop Estimating',
        'desc'     => 'Material and fabrication estimates for kitchens and baths.',
        'list'     => ['Granite & Quartz', 'Marble & Solid Surface', 'Laminate Tops', 'Edges & Cutouts', 'Backsplash Areas'],
        'img'      => 'img15.jpg',
        'home_img' => 'fc-img05.jpg',
    ],
    [
        'id'       => 'window-treatments',
        'name'     => 'Window Treatments',
        'desc'     => 'Measured quantities and costs for blinds, shades and drapery.',
        'list'     => ['Blinds & Shutters', 'Roller & Roman Shades', 'Curtains & Drapery', 'Motorized Systems', 'Hardware & Install'],
        'img'      => 'img16.jpg',
        'home_img' => 'fc-img06.jpg',
    ],
    [
        'id'       => 'rendering-3d',
        'name'     => '3D Rendering',
        'desc'     => 'Realistic 3D visuals that help clients see and approve designs.',
        'list'     => ['Exterior Renderings', 'Interior Renderings', '3D Floor Plans', 'Walkthroughs', 'Material Visuals'],
        'img'      => 'img17.jpg',
        'home_img' => 'fc-img07.jpg',
    ],
];

/** Escape text for HTML output. */
function e(string $text): string
{
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

/** " current-menu-item" when $item is the current page, else "". */
function active(string $item): string
{
    global $page;
    return ($page ?? '') === $item ? ' current-menu-item' : '';
}

/** <option> list of services for contact forms (value 1 is the placeholder). */
function service_options(string $indent): string
{
    $html = '';
    foreach (SERVICES as $i => $service) {
        $html .= "\n" . $indent . '<option value="' . ($i + 2) . '">' . e($service['name']) . '</option>';
    }
    return $html;
}
