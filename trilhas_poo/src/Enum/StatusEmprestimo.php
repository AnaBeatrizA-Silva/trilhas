<?php

namespace App\Enum;

enum StatusEmprestimo: string {
    case ATIVO = 'ativo';
    case DEVOLVIDO = 'devolvido';
    case ATRASADO = 'atrasado';
}