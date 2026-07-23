<?php

namespace App\Models;

class Usuario {
    private int $idUser;
    private string $nome;
    private int $idade;

    public function __construct(int $idUser, string $nome, int $idade)
    {
        $this->idUser = $idUser;
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function setIdUser(int $idUser): void
    {
        $this->idUser = $idUser;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }
}