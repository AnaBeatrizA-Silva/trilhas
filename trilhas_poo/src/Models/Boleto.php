<?php

namespace App\Models;

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Interfaces\Pagamento;

class Boleto implements Pagamento {
    public function pagar(float $valor): void
    {
        echo "Pagamento por boleto no valor de {$valor} realizado com sucesso \n";
    }
}

