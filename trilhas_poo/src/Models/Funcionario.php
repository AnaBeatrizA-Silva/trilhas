<?php

namespace App\Models;
use InvalidArgumentException;

abstract class Funcionario 
{
    public string $nome;
    public float $salario;

    public function __construct(string $nome, float $salario)
    {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    // Setter para tratar o salario
    public function setSalarioNegativo(float $salario): void
    {
        if($salario < 0) 
        {
             throw new InvalidArgumentException("Salario não pode ser negativo");
        }
        $this->salario = $salario;
    }

    abstract public function calcularBonus();
}