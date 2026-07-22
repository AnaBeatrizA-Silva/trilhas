<?php

namespace App\Traits;

require_once __DIR__ . '/../../vendor/autoload.php';

trait Logger {
    public function registrarLog(): void {
        echo "Log registrado \n";
    }
}