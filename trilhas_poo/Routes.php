<?php

use App\Controllers\LivroController;

$router->post('/salvar-livro', [LivroController::class, 'store']);