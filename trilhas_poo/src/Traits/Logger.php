<?php

namespace App\Traits;

trait Logger {
    public function log(string $msg): void {
        error_log("[" . date('y-m-d H:i:s') . "] " .  $msg);
    }
}