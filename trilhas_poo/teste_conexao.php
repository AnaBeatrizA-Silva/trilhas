<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Database\Connection;

try {
    $pdo = Connection::getConnection();
    echo "Conexão realizada com sucesso! \n";
} catch (Exception $e) {
    echo "Erro ao conectar: " . $e->getMessage(). "\n";
}