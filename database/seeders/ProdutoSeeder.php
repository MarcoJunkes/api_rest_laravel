<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Produto;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for($i = 0; $i < 20; $i++){
            Produto::create([
                'nome' => $faker->word,
                'descricao' => $faker->sentence,
                'preco' => $faker->randomFloat(2, 1, 1000), // Valores entre 1 e 1000 com 2 casas decimais
                'qtde_estoque' => $faker->numberBetween(1, 100),
                'status' => $faker->boolean
            ]);
        }
    }
}
