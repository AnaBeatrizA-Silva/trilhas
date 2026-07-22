<?php

namespace App\Models;

use DateTime;

class Emprestimo {
    private int $id_emprestimo;
    private int $movimentacao;
    private Livro $livro;
    private Usuario $usuario;
    private DateTime $dtEmprestimo;

}