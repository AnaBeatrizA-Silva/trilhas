<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Models\Funcionario;

class Desenvolvedor extends Funcionario{

    public function __construct(string $nome, float $salario)
    {
        parent::__construct($nome, $salario);
    }

    public function calcularBonus(): float
    {
        return $salarioComBonus = $this->salario + ($this->salario * 0.10);
    }
}

$desenvolvedor = new Desenvolvedor("Eduardo", 4000.00);

echo "O salário final do Desenvolvedor é {$desenvolvedor->calcularBonus()} \n";