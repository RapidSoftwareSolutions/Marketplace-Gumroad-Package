<?php
$routes = [
    'metadata',
    'getUserProducts'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

