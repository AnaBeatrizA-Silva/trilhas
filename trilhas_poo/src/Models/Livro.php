<?php


namespace App\Models;

require_once __DIR__ . '/../../vendor/autoload.php';
use DateTime;
use App\Enum\DisponibilidadeLivro;

class Livro {
    private int $idLivro; 
    private string $titulo; 
    private string $autor; 
    private DateTime $dtLancamento; 
    private string $editora; 
    private string $isbn; 
    private ?string $sinopse = null; 
    private string $classificaoIndicativa; 
    private ?Emprestimo $emprestimo = null; 
    private DisponibilidadeLivro $disponibilidade; 

    public function __construct(
        int $idLivro,
        string $titulo,
        string $autor,
        DateTime $dtLancamento,
        string $editora,
        string $isbn,
        string $classificaoIndicativa,
        DisponibilidadeLivro $disponibilidade
    )
    {
        $this->idLivro = $idLivro;
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->dtLancamento = $dtLancamento;
        $this->editora = $editora;
        $this->isbn = $isbn;
        $this->classificaoIndicativa = $classificaoIndicativa;
        $this->disponibilidade = DisponibilidadeLivro::DISPONIVEL;
    }

    public function getId(): int {
        return $this->idLivro;
    }

    public function setId(int $idLivro): void {
        $this->idLivro = $idLivro;
    }

    public function getTitulo(): string {
        return $this->titulo;
    }

    public function getAutor(): string {
        return $this->autor;
    }

    public function getDtLancamento(): DateTime {
        return $this->dtLancamento;
    }

    public function getEditora(): string {
        return $this->editora;
    }

    public function getIsbn(): string {
        return $this->isbn;
    }

    public function getSinopse(): ?string {
        return $this->sinopse;
    }

    public function getClassificaoIndicativa(): string {
        return $this->classificaoIndicativa;
    }

    public function getEmprestimo(): ?Emprestimo {
        return $this->emprestimo;
    }

    public function getDisponibilidade(): DisponibilidadeLivro {
        return $this->disponibilidade;
    }

    public function mostrarLivro() {
        echo "ola";
    }
}

