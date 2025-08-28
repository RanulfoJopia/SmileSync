<?php
// routes/web.php

// Default: Show Landing Page
$page = $_GET['page'] ?? 'landing';

switch($page) {
    case 'landing':
        require_once "resources/views/landing.php";
        break;

    case 'login':
        require_once "resources/views/auth/login.php";
        break;

    case 'register':
        require_once "resources/views/auth/register.php";
        break;

    default:
        echo "404 Page Not Found";
}
