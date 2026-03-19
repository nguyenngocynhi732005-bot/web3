<?php

/**
 * Laravel - A PHP Framework For Web Artisans
<<<<<<< HEAD
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? ''
);

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.
=======
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// Nếu file tồn tại thì chạy trực tiếp
>>>>>>> 6d91d52e4af768ae3784e8fc2e3f3d8cb1a1ffff
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

<<<<<<< HEAD
require_once __DIR__.'/public/index.php';
=======
// Không thì chạy Laravel
require_once __DIR__.'/public/index.php';
>>>>>>> 6d91d52e4af768ae3784e8fc2e3f3d8cb1a1ffff
