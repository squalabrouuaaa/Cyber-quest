<?php

namespace Database\Factories;

use App\Models\Competence;
use App\Models\Organisation;
use App\Models\Pnj;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Organisation>
 */

class OrganisationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "level" => rand(0,3),
            "xp" => 0 
        ];
    }
}