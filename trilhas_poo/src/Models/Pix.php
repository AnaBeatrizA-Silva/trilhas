<?php

namespace App\Models;

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Models\Pagamento;

class Pix implements Pagamento {
    public function pagar(float $valor): void
    {
        echo "Pagamento por pix no valor de {$valor} realizado com sucesso \n";
    }
}

