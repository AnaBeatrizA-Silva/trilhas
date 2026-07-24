<?php

use App\Controllers\LivroController;

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$rota = $_GET['rota'] ?? 'listar'; // Rota padrão é listar
$id = $_GET['id'] ?? null;

$controller = new LivroController();

switch ($rota) {
    case 'listar':
        $controller->listar();
        break;
        
    case 'detalhes':
        if ($id) {
            $controller->detalhes((int)$id);
        } else {
            echo "ID do livro não informado.";
        }
        break;

    case 'cadastrar':
        // A lógica do seu form de cadastro
        break;

    default:
        echo "Página não encontrada!";
        break;
}