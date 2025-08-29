<?php
// index.php - main router

// Load configuration (optional, only if config.php exists)
if (file_exists(__DIR__ . '/config.php')) {
    require_once __DIR__ . '/config.php';
}

// Get requested page (default: landing)
$page = isset($_GET['page']) ? $_GET['page'] : 'landing';

// Map routes → actual files (relative to resources/views)
// routes/web.php

// Map routes → actual files
$routes = [
    'landing'  => '../resources/views/landing.php',
    'login'    => '../resources/views/auth/login.php',
    'register' => '../resources/views/auth/register.php',
    'forgot'   => '../resources/views/auth/forgot.php'
];

// Check if page is valid
if (array_key_exists($page, $routes)) {
    include __DIR__ . "/../resources/views/layouts/header.php"; // load once
    include __DIR__ . "/" . $routes[$page];                     // load content
    include __DIR__ . "/../resources/views/layouts/footer.php"; // load once
} else {
    include __DIR__ . "/../resources/views/404.php";
}
