<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// Nếu file tồn tại thì chạy trực tiếp
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

// Không thì chạy Laravel
require_once __DIR__.'/public/index.php';