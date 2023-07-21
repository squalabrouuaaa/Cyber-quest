<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePnjsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pnjs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('profession');
            $table->integer('level');
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
        Schema::dropIfExists('pnjs');
    }
}
