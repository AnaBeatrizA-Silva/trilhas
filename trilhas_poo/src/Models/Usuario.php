<?php

require_once __DIR__ . '/../../vendor/autoload.php';


class Usuario {
    use App\Traits\Logger;

    public function criar():void {
            $this->registrarLog();
    }
} 


$usuario = new Usuario();
$usuario->criar();