<?php

namespace Database\Factories;

use App\Models\CompetenceLevel;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Competence>
 */

class CompetenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [ 
            "osint" => CompetenceLevel::factory()->create(),
            "programmation" => CompetenceLevel::factory()->create(),
            "reverse_engineering" => CompetenceLevel::factory()->create(),
            "forensic" => CompetenceLevel::factory()->create(),
            "securite_des_systèmes_embarques" => CompetenceLevel::factory()->create(),
            "securite_cloud" => CompetenceLevel::factory()->create(),
            "analyse_de_donnees" => CompetenceLevel::factory()->create(),
            "gouvernance_et_conformite" => CompetenceLevel::factory()->create(),
            "securite_rf" => CompetenceLevel::factory()->create(),
            "ingenierie_sociale" => CompetenceLevel::factory()->create(),
            "securite_physique" => CompetenceLevel::factory()->create(),
            "securite_active_directory" => CompetenceLevel::factory()->create(),
            "securite_web" => CompetenceLevel::factory()->create(),
            "securite_des_telephones_mobiles" => CompetenceLevel::factory()->create(),
            "maître_du_pwnage" => CompetenceLevel::factory()->create(),
            "securite_des_reseaux" => CompetenceLevel::factory()->create(),
            "securite_des_communications_sans_fil" => CompetenceLevel::factory()->create(),
            "securite_des_vehicules_connectes" => CompetenceLevel::factory()->create(),
            "crochetage" => CompetenceLevel::factory()->create(),
            "electronique" => CompetenceLevel::factory()->create(),
            "securite_physique_des_donnees" => CompetenceLevel::factory()->create(),
            "surveillance_et_contre_surveillance" => CompetenceLevel::factory()->create(),
            "securite_de_internet_des_objets" => CompetenceLevel::factory()->create(),
            "psychologie" => CompetenceLevel::factory()->create(),
            "leadership" => CompetenceLevel::factory()->create(),
            "negociation" => CompetenceLevel::factory()->create()
        ];
    }

    
}
