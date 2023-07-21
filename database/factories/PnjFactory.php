<?php

namespace Database\Factories;

use App\Models\Competence;
use App\Models\Organisation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pnj>
 */

class PnjFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'profession' => Str::random(5),
            'level' => 1,
            'fk_org_id' => Organisation::factory(), // password
            'fk_cmpts_id' => Competence::factory()
        ];
    }

    
}
