<?php
// Router for PHP's built-in web server: serves real files (css, js, images) directly,
// and sends everything else to Symfony's front controller.
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$file = __DIR__ . '/public' . $path;

if ($path !== '/' && is_file($file) && !str_ends_with($file, '.php')) {
    return false;
}

// Symfony Runtime requires SCRIPT_FILENAME to point at the front controller.
$_SERVER['SCRIPT_FILENAME'] = __DIR__ . '/public/index.php';
$_SERVER['SCRIPT_NAME'] = '/index.php';
$_SERVER['PHP_SELF'] = '/index.php';

require __DIR__ . '/public/index.php';
