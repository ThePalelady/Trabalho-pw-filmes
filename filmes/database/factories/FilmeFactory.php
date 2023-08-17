
<?php

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Filme;

class FilmeFactory extends Factory
{
    protected $model = Filme::class;

    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence,
            'ano_lancamento' => $this->faker->year,
            // Defina mais campos aqui
        ];
    }
}
