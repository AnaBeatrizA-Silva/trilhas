<?php

namespace App\Models;

use App\Interface\Identificavel;

class Usuario implements Identificavel {
    private int $idUser;
    private string $nome;
    private int $idade;

    public function __construct(int $idUser, string $nome, int $idade)
    {
        $this->idUser = $idUser;
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getId(): int {
        return $this->idUser;
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