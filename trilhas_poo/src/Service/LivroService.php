<?php

namespace App\Service;

use App\Repositories\LivroRepository;
use App\Models\Livro;
use App\Traits\Logger;
use InvalidArgumentException;
use DateTime;
use Exception;

/*
    Adicionar mais verificações para validar duplicidade de isbn, autor, editora, data de lançamento, classificação indicativa, etc.. são campos obrigatórios
    e validar a idade da pessoa em relação a classificação indicativa.
*/
class LivroService {

    use Logger;

    private LivroRepository $repository;

    public function __construct(LivroRepository $repository){
        $this->repository = $repository;
    }

    public function validar(Livro $livro):void {
        if(empty($livro->getTitulo())) {
            throw new InvalidArgumentException('Titulo é obrigatório');
        }

        if(strlen($livro->getIsbn()) < 10) {
            throw new InvalidArgumentException('O ISBN deve ter pelo menos 10 caracteres.');
        }

        if ($livro->getDtLancamento() > new DateTime()) {
            throw new InvalidArgumentException("A data de lançamento não pode ser futura.");
        }
    }

    public function cadastrar(Livro $livro): bool {
            $this->validar($livro);
            $resultado = $this->repository->criar($livro);
            // $this->log("Livro: '{$livro->getTitulo()}' cadastrado com sucesso.");
    
            return $resultado;
    }
}