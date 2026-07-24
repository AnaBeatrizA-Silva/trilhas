<?php

    require_once __DIR__ . '/../vendor/autoload.php';

// Limpeza da URL
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $path = str_replace('/trilhas_poo/public', '', $path);
    if ($path === '' || $path === '/') $path = '/home';

    define('ROOT', dirname(__DIR__)); // Isso aponta para /var/www
require_once ROOT . '/vendor/autoload.php';
require_once ROOT . '/Routes.php';

// Chama o arquivo de rotas
require_once __DIR__ . '/../Routes.php';
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