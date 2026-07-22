<?php

require_once __DIR__ . '/../../vendor/autoload.php';


class Pedido {
    use App\Traits\Logger;

    public function criar():void {
            $this->registrarLog();
    }
} 


$pedido = new Pedido();
$pedido->criar();