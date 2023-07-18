<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('osint')->references('id')->on('competence_levels')->onUpdate('CASCADE')->onDelete('CASCADE')->constrained();
            $table->foreignId('programmation')->references('id')->on('competence_levels')->onUpdate('CASCADE')->onDelete('CASCADE')->constrained();
            $table->foreignId('reverse_engineering')->references('id')->on('competence_levels')->onUpdate('CASCADE')->onDelete('CASCADE')->constrained();
            $table->foreignId('forensic')->references('id')->on('competence_levels')->onUpdate('CASCADE')->onDelete('CASCADE')->constrained();
            $table->foreignId('securite_des_systèmes_embarques')->references('id')->on('competence_levels')->onUpdate('CASCADE')->onDelete('CASCADE')->constrained();
            $table->foreignId('securite_cloud')->references('id')->on('competence_levels')->onUpdate('CASCADE')->onDelete('CASCADE')->constrained();
            $table->foreignId('analyse_de_donnees')->references('id')->on('competence_levels')->onUpdate('CASCADE')->onDelete('CASCADE')->constrained();
            $table->foreignId('gouvernance_et_conformite')->references('id')->on('competence_levels')->onUpdate('CASCADE')->onDelete('CASCADE')->constrained();
            $table->foreignId('securite_rf')->references('id')->on('competence_levels')->onUpdate('CASCADE')->onDelete('CASCADE')->constrained();
            $table->foreignId('ingenierie_sociale')->references('id')->on('competence_levels')->onUpdate('CASCADE')->onDelete('CASCADE')->constrained();
            $table->foreignId('securite_physique')->references('id')->on('competence_levels')->onUpdate('CASCADE')->onDelete('CASCADE')->constrained();
            $table->foreignId('securite_active_directory')->references('id')->on('competence_levels')->onUpdate('CASCADE')->onDelete('CASCADE')->constrained();
            $table->foreignId('securite_web')->references('id')->on('competence_levels')->onUpdate('CASCADE')->onDelete('CASCADE')->constrained();
            $table->foreignId('securite_des_telephones_mobiles')->references('id')->on('competence_levels')->onUpdate('CASCADE')->onDelete('CASCADE')->constrained();
            $table->foreignId('maître_du_pwnage')->references('id')->on('competence_levels')->onUpdate('CASCADE')->onDelete('CASCADE')->constrained();
            $table->foreignId('securite_des_reseaux')->references('id')->on('competence_levels')->onUpdate('CASCADE')->onDelete('CASCADE')->constrained();
            $table->foreignId('securite_des_communications_sans_fil')->references('id')->on('competence_levels')->onUpdate('CASCADE')->onDelete('CASCADE')->constrained();
            $table->foreignId('securite_des_vehicules_connectes')->references('id')->on('competence_levels')->onUpdate('CASCADE')->onDelete('CASCADE')->constrained();
            $table->foreignId('crochetage')->references('id')->on('competence_levels')->onUpdate('CASCADE')->onDelete('CASCADE')->constrained();
            $table->foreignId('electronique')->references('id')->on('competence_levels')->onUpdate('CASCADE')->onDelete('CASCADE')->constrained();
            $table->foreignId('securite_physique_des_donnees')->references('id')->on('competence_levels')->onUpdate('CASCADE')->onDelete('CASCADE')->constrained();
            $table->foreignId('surveillance_et_contre_surveillance ')->references('id')->on('competence_levels')->onUpdate('CASCADE')->onDelete('CASCADE')->constrained();
            $table->foreignId('securite_de_internet_des_objets ')->references('id')->on('competence_levels')->onUpdate('CASCADE')->onDelete('CASCADE')->constrained();
            $table->foreignId('psychologie')->references('id')->on('competence_levels')->onUpdate('CASCADE')->onDelete('CASCADE')->constrained();
            $table->foreignId('leadership')->references('id')->on('competence_levels')->onUpdate('CASCADE')->onDelete('CASCADE')->constrained();
            $table->foreignId('negociation')->references('id')->on('competence_levels')->onUpdate('CASCADE')->onDelete('CASCADE')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('competences');
    }
}
