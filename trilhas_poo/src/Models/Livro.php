<?php

enum StatusDisponibilidade: string 
{
    case INDISPONIVEL = 'indisponivel';
    case DISPONIVEL = 'disponivel';
}

class Livro 
{
    private string $titulo;
    private string $autor;
    private string $ano;
    private StatusDisponibilidade $disponibilidade = StatusDisponibilidade::DISPONIVEL;

    public function __construct(string $titulo, string $autor, string $ano, StatusDisponibilidade $disponibilidade) 
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ano = $ano;
        $this->disponibilidade = $disponibilidade;
    }

    //  Getters e Setters do Titulo
    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): void
    {
        $this->titulo = $titulo;
    }

    //  Getters e Setters do Autor
    public function getAutor(): string
    {
        return $this->autor;
    }

    public function setAutor(string $autor): void
    {
        $this->autor = $autor;
    }

    //  Getters e Setters do Ano
    public function getAno(): string
    {
        return $this->ano;
    }

    public function setAno(string $ano): void
    {
        $this->ano = $ano;
    }

    //  Getters e Setters do Disponibilidade
    public function getDisponibilidade(): StatusDisponibilidade
    {
        return $this->disponibilidade;
    }

    public function setDisponibilidade(StatusDisponibilidade $disponibilidade): void
    {
        $this->disponibilidade = $disponibilidade;
    }

    // Métodos

    public function emprestar() {
        echo "Livro emprestado com sucesso";
        $status = $this->disponibilidade = StatusDisponibilidade::INDISPONIVEL;
        echo "
            Titulo: $this->titulo.
            Autor: $this->autor.
            Data: $this->ano.
            Status: $status->value \n";
    }

    public function devolver() {
        echo "Livro devolvido com sucesso";
        $status = $this->disponibilidade = StatusDisponibilidade::DISPONIVEL;
        echo "
            Titulo: $this->titulo.
            Autor: $this->autor.
            Data: $this->ano.
            Status: $status->value \n";
    }
}

$livro = new Livro("Trono de Vidro", "Sarah J. Mass", "2/12/2012", StatusDisponibilidade::DISPONIVEL);

$livro->emprestar();
$livro->devolver();