<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Models\Funcionario;

class Estagiario extends Funcionario{

    public function __construct(string $nome, float $salario)
    {
        parent::__construct($nome, $salario);
    }

    public function calcularBonus(): float
    {
        return $salarioComBonus = $this->salario + ($this->salario * 0.05);
    }
}

$estagiario = new Estagiario("Eduardo", 1500.00);

echo "O salário final do estagiário é {$estagiario->calcularBonus()} \n";