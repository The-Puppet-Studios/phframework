<?php
    $request = $_SERVER['REQUEST_URI'];

if ($request == '/' || $request == '/index') {
    echo "Welcome to the index page!";
} elseif ($request == '/about') {
    echo "This is the about page.";
} else {
    http_response_code(404);
    echo "Page not found.";
}
?>