<?php

namespace App\Models;

class Livro {
    protected int $idLivro;
    public string $titulo;
    public string $autor;
    public string $dtLancamento;
    protected string $isbn;
    public string $sinopse;
    public string $classificaoIndicativa;
}