<?php

require_once __DIR__ . '/../../vendor/autoload.php';


class Produto {
    use App\Traits\Logger;

    public function criar():void {
            $this->registrarLog();
    }
} 


$produto = new Produto();
$produto->criar();