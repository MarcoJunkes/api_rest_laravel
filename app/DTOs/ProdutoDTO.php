<?php

namespace App\DTOs;

class ProdutoDTO{
    public string $nome;
    public string $descricao;
    public float $preco;
    public int $qtde_estoque;
    public boolean $status;

    public function __construct(string $nome, string $descricao, float $preco, int $qtde_estoque, boolean $status){
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->qtde_estoque = $qtde_estoque;
        $this->status = $status;
    }
}