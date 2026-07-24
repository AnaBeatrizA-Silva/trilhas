<?php

    require_once __DIR__ . '/../vendor/autoload.php';
    
    $router = new \App\Core\Router();
    require_once __DIR__ . '/../routes.php';

    $router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1>olá</h1>

    <a href="./home.php">home</a>
</body>
</html>