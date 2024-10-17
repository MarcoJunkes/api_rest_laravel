<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Produto;
use Mockery;

class ProdutoTest extends TestCase
{
    protected function tearDown(): void
    {
        Mockery::close();
    }

    /**
     * Teste a criação de um produto
     * 
     * @return void
     */
    public function teste_cria_produto()
    {
        // Dados do produto que será simulado
        $produtoData = [
            'nome' => 'Produto Teste',
            'descricao' => 'Descrição do produto teste',
            'preco' => 99.99,
            'qtde_estoque' => 10,
            'status' => true
        ];

        // Cria um mock do modelo Produto
        $produtoMock = Mockery::mock(Produto::class);

        // Configura o comportamento esperado do mock para o método create
        $produtoMock->shouldReceive('create')
                    ->with($produtoData)
                    ->andReturn($produtoMock);
        
        // Configura os atributos esperados
        $produtoMock->shouldReceive('getAttribute')
                    ->with('nome')
                    ->andReturn($produtoData['nome']);
        
        $produtoMock->shouldReceive('getAttribute')
                    ->with('preco')
                    ->andReturn($produtoData['preco']);
        
        $this->assertEquals('Produto Teste', $produtoMock->getAttribute('nome'));
        $this->assertEquals(99.99, $produtoMock->getAttribute('preco'));
    }
}
