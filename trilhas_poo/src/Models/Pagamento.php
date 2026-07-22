<?php

namespace App\Models;

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Models\Pix;
use App\Models\Cartao;
use App\Models\Boleto;

interface Pagamento {
    public function pagar(float $valor): void;
}

$pagamentos = [
    new Pix(),
    new Cartao(),
    new Boleto()
];

foreach ($pagamentos as $pag) {
    $pag->pagar(100);
}