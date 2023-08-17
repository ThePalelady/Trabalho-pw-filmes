<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FilmesTableSeeder extends Seeder
{
    public function run()
    {
        Filme::factory(10)->create(); // Cria 10 filmes fictícios
    }
}
