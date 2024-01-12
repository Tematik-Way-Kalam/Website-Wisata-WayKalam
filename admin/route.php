<?php

// Get the requested URL path
$requestUri = $_SERVER['REQUEST_URI'];

// Define routes
$routes = [
    '/' => 'home',
    '/about' => 'about',
    '/contact' => 'contact'
];

// Check if the requested path exists in the defined routes
if (array_key_exists($requestUri, $routes)) {
    // Include the corresponding controller or content for the route
    include $routes[$requestUri] . '.php';
} else {
    // Handle 404 Not Found error
    header("HTTP/1.0 404 Not Found");
    echo '404 Not Found';
}

