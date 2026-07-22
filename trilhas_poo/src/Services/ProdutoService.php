<?php

namespace App\Services;

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Repositories\ProdutoRepository;
use InvalidArgumentException;

class ProdutoService {
   public function criar(string $nome, float $preco) {
    if($nome == '') throw new InvalidArgumentException('Nome é obrigatório');

    if($preco <= 0) throw new InvalidArgumentException('Preço deve ser maior que 0');
    
    $produtoRepository = new ProdutoRepository();
    $produtoRepository->salvar();
   }
}

$produto = new ProdutoService();
$produto->criar('asdasd', 89);
