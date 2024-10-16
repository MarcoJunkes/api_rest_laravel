<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;
use App\Http\Requests\ProdutoRequest;
use App\Http\Resources\ProdutoResource;
use App\DTOs\ProdutoDTO;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $produtos = Produto::all();
            return ProdutoResource::collection($produtos);
        }catch(\Exception $e){
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProdutoRequest $request)
    {
        try {
            // Cria o DTO com os dados validados
            $produtoDTO = new ProdutoDTO(
                $request->validated()['nome'],
                $request->validated()['descricao'],
                $request->validated()['preco'],
                $request->validated()['qtde_estoque'],
                $request->validated()['status']
            );
    
            // Cria o Produto no banco de dados
            $produto = Produto::create((array) $produtoDTO); // Converter o DTO em array

            return (new ProdutoResource($produto))->response()->setStatusCode(201);
        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json([
                'error' => 'Erro no banco de dados',
                'message' => $e->getMessage()
            ], 500);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Erro inesperado',
                'message' => $e->getMessage()
            ], 500);
        }
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produto $produto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produto $produto)
    {
        //
    }
}
