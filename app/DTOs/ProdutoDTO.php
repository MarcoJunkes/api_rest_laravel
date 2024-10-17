<?php

namespace App\DTOs;

class ProdutoDTO{
    public string $nome;
    public ?string $descricao;
    public float $preco;
    public int $qtde_estoque;
    public bool $status;

    public function __construct(string $nome, ?string $descricao, float $preco, int $qtde_estoque, bool $status){
        $this->nome = $nome;
        $this->descricao = $descricao ?? null;
        $this->preco = $preco;
        $this->qtde_estoque = $qtde_estoque;
        $this->status = $status;
    }
}