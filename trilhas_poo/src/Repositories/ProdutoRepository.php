<?php

namespace App\Repositories;

class ProdutoRepository {
    public function salvar(): void {
        echo "Cadastrados com sucesso!";
    }
    public function buscarTodos(): void {
        echo "Busca completa";
    }
    public function buscarPorId(): void {
        echo "Busca por id";
    }
    public function atualizar(): void {
        echo "Atualizados com sucesso!";
    }
    public function remover(): void {
        echo "Removidos com sucesso!";
    }
}