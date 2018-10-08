<?php
/// routing.php
$routes = [
    'Item' => [ // Controller
        ['index', '/', 'GET'], // action, url, HTTP method
        ['show', '/item/{id}', 'GET'], // action, url, HTTP method
    ],

    'category' => [
        ['index', '/categories', 'GET'],
        ['show', '/category/{id}', 'GET'],
    ],

];