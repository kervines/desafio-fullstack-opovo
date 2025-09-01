<?php

namespace Database\Seeders;

use App\Enums\CategoriasEnum;
use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias = [
            [
                "titulo" => "Extensão",
                "slug" => CategoriasEnum::EXTENSAO
            ],
            [
                "titulo" => "Bem-viver",
                "slug" => CategoriasEnum::BEM_VIVER
            ],
            [
                "titulo" => "Curta-duração",
                "slug" => CategoriasEnum::CURTA_DURACAO
            ],
            [
                "titulo" => "Livre",
                "slug" => CategoriasEnum::LIVRE
            ],
            [
                "titulo" => "Negócios",
                "slug" => CategoriasEnum::NEGOCIOS
            ],
            [
                "titulo" => "Técnico",
                "slug" => CategoriasEnum::TECNICO
            ],
            [
                "titulo" => "Tecnologia e profissão",
                "slug" => CategoriasEnum::TECNOLOGIA_PROFISSAO
            ],
        ];

        foreach ($categorias as $categoria) {
            Categoria::create($categoria);
        }
    }
}