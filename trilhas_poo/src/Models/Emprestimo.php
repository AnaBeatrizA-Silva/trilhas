<?php

namespace App\Models;

use DateTime;
use App\Enum\StatusEmprestimo;

class Emprestimo {
    private int $idEmprestimo;
    private DateTime $dtEmprestimo;
    private DateTime $dtDevolucao;
    private Usuario $id_usuario;
    private StatusEmprestimo $status;

    public function __construct(int $idEmprestimo, DateTime $dtEmprestimo, DateTime $dtDevolucao, Usuario $id_usuario, StatusEmprestimo $status)
    {
        $this->idEmprestimo = $idEmprestimo;
        $this->dtEmprestimo = $dtEmprestimo;
        $this->dtDevolucao = $dtDevolucao;
        $this->id_usuario = $id_usuario;
        $this->status = StatusEmprestimo::ATIVO;
    }

    public function getIdEmprestimo(): int
    {
        return $this->idEmprestimo;
    }

    public function setIdEmprestimo(int $idEmprestimo): void
    {
        $this->idEmprestimo = $idEmprestimo;
    }

    public function getDtEmprestimo(): DateTime
    {
        return $this->dtEmprestimo;
    }
    public function getDtDevolucao(): DateTime
    {
        return $this->dtDevolucao;
    }

    public function getUsuario(): Usuario
    {
        return $this->id_usuario;
    }

    public function getStatusEmprestimo(): StatusEmprestimo {
        return $this->status;
    }

}