<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fk_usr_id')
                ->references('id')
                ->on('users')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE')
                ->constrained();
            $table->string('name');
            $table->string('profession');
            $table->string('');
            $table->foreignId('fk_org_id')
                ->nullable()
                ->references('id')
                ->on('organisations')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE')
                ->constrained();
            $table->foreignId('fk_cmpts_id')
                ->nullable()
                ->references('id')
                ->on('competences')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE')
                ->constrained();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personnages');
    }
}
