<?php

namespace App\Controllers;

use App\Service\LivroService;
use App\Repositories\LivroRepository;
use App\Models\Livro;
use Exception;
use App\Database\Connection;
use DateTime;
use App\Enum\DisponibilidadeLivro;

class LivroController {
    public function store() {
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $dataString = $_POST['dt-lancamento'];
        $editora = $_POST['editora'];
        $isbn = $_POST['isbn'];
        $sinopse = $_POST['sinopse'];
        $classificacaoIndicativa = $_POST['classificao-indicativa'];

        $dtLancamento = new DateTime($dataString);
        $disponibilidade = DisponibilidadeLivro::DISPONIVEL;

        $livro = new Livro(0, $titulo, $autor, $dtLancamento, $editora, $isbn, $classificacaoIndicativa, $disponibilidade);

        $pdo = Connection::getConnection();

        $service = new LivroService(new LivroRepository($pdo));

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    var_dump($_POST); die(); // Comente isso depois de testar
}

        try {
            $service->cadastrar($livro);

            header('Location: /home');
            exit;
        } catch (Exception $e) {
            echo 'Erro: ' . $e->getMessage();
        }
    }

    public function listar() {
        $repo = new LivroRepository(Connection::getConnection());

        $livros = $repo->buscarTodos();

        require_once dirname(__DIR__, 2) . '/public/home.php';
    }

    public function detalhes(){
        $id = $_GET['id'];
        $repo = new LivroRepository(Connection::getConnection());
        $livro =$repo->buscarPorId((int) $id);

        require_once dirname(__DIR__, 2) . '/public/views/detalhesLivro.php';
    }

}