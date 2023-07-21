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
        $organisation = Organisation::orderBy('id')->last();
        $new_id = $organisation->id +1;
        Pnj::factory()->count(10)->create(['fk_org_id' => $new_id]);
        return [
            'id'   => $new_id,
            'name' => $this->faker->name(),
            'type' => Str::random(5),
            'dificulty' => 1,
        ];
    }

    
}
