<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Models\Funcionario;

class Gerente extends Funcionario{

    public function __construct(string $nome, float $salario)
    {
        parent::__construct($nome, $salario);
    }

    public function calcularBonus(): float
    {
        return $salarioComBonus = $this->salario + ($this->salario * 0.20);
    }
}

$gerente = new Gerente("Eduardo", 8000.00);

echo "O salário final do Gerente é {$gerente->calcularBonus()} \n";