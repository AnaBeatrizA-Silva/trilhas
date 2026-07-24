<?php

namespace App\Controllers;

use App\Service\LivroService;
use App\Repositories\LivroRepository;

class LivroController {
    public function sotore() {
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $dtLancamento = $_POST['dt- lancamento'];
        $editora = $_POST['editora'];
        $isbn = $_POST['editora'];
        $sinopse = $_POST['sinopse'];
        $classificacaoIndicativa = $_POST['classificao-indicativa'];

        $livro = new Livro(0, $titulo, $autor, $dtLancamento, $editora, $isbn, $sinopse, $classificacaoIndicativa);

        $service = new LivroServiced(new LivroRepository($pdo));

        try {
            $service->cadastrar($livro);

            header('Location: /home');
            exit;
        } catch (Exception $e) {
            echo 'Erro: ' . $e->getMessage();
        }
    }

}