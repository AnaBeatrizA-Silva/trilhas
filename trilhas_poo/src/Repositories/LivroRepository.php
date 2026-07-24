<?php

namespace App\Repositories;

use App\Models\Livro;
use App\Repositories\BaseRepository;

use PDO;

class LivroRepository extends  BaseRepository{

    public function criar(Livro $livro): bool {
        $sql = "insert into livros (
                    titulo,
                    autor,
                    dt_lancamento,
                    editora,
                    isbn,
                    sinopse,
                    classificacao_indicativa,
                    disponibilidade
                )
                values (
                    :titulo,
                    :autor,
                    :dt_lancamento,
                    :editora,
                    :isbn,
                    :sinopse,
                    :classificacao_indicativa,
                    :disponibilidade
                )";
        $stmt = $this->connection->prepare($sql);

        return $stmt->execute([
            'titulo' => $livro->getTitulo(),
            'autor' => $livro->getAutor(),
            'dt_lancamento' => $livro->getDtLancamento()->format("y-m-d"),
            'editora' => $livro->getEditora(),
            'isbn' => $livro->getIsbn(),
            'sinopse' => $livro->getSinopse(),
            'classificacao_indicativa' => $livro->getClassificaoIndicativa(),
            'disponibilidade' => $livro->getDisponibilidade()->value,
        ]);
    }

    public function buscarTodos(): array {
        
    }
}