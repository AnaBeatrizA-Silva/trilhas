<?php

namespace App\Repositories;

use App\Models\Livro;
use App\Repositories\BaseRepository;
use App\Database\Connection;
use App\Enum\DisponibilidadeLivro;

use PDO;

class LivroRepository extends BaseRepository{

    public function criar(Livro $livro): bool {
        $sql = "insert into livros (
                    titulo,
                    autor,
                    dt_lancamento,
                    editora,
                    isbn,
                    sinopse,
                    classificao_indicativa,
                    disponibilidade
                )
                values (
                    :titulo,
                    :autor,
                    :dt_lancamento,
                    :editora,
                    :isbn,
                    :sinopse,
                    :classificao_indicativa,
                    :disponibilidade
                )";
        $stmt = $this->connection->prepare($sql);

        return $stmt->execute([
            'titulo' => $livro->getTitulo(),
            'autor' => $livro->getAutor(),
            'dt_lancamento' => $livro->getDtLancamento()->format("Y-m-d"),
            'editora' => $livro->getEditora(),
            'isbn' => $livro->getIsbn(),
            'sinopse' => $livro->getSinopse(),
            'classificao_indicativa' => $livro->getClassificaoIndicativa(),
            'disponibilidade' => $livro->getDisponibilidade()->value,
        ]);
    }

    public function buscarTodos(): array {
        $sql = "SELECT * FROM livros";
        $stmt = $this->connection->query($sql);

        
        $livros = [];
        while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $disponibilidade = DisponibilidadeLivro::from($data['disponibilidade']);

            $livro = new Livro(
            $data['id_livro'], 
            $data['titulo'], 
            $data['autor'], 
            new \DateTime($data['dt_lancamento']), 
            $data['editora'], 
            $data['isbn'], 
            $data['classificao_indicativa'],
            $disponibilidade
            );
            $livro->setId($data['id_livro']);
            $livros[] = $livro;
        }

        return $livros ?: [];
    }

    public function buscarPorId(int $id) {
        $sql = "select * from livros where id_livro = :id";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute(['id'=> $id]);

        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        if($data) {
            $disponibilidade = DisponibilidadeLivro::from($data['disponibilidade']);

            $livro = new Livro(
                $data['id_livro'], 
                $data['titulo'], 
                $data['autor'], 
                new \DateTime($data['dt_lancamento']), 
                $data['editora'], 
                $data['isbn'], 
                $data['classificao_indicativa'],
                $disponibilidade
            );
            $livro->setId($data['id_livro']);
            return $livro;
        }

        return null;
    }
}