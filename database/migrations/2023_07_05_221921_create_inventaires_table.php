<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaires', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fk_org_id')
                ->nullable()
                ->references('id')
                ->on('organisations')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE')
                ->constrained();
            $table->foreignId('fk_pnj_id')
                ->nullable()
                ->references('id')
                ->on('pnjs')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE')
                ->constrained();
            $table->foreignId('fk_pj_id')
                ->nullable()
                ->references('id')
                ->on('personnage')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE')
                ->constrained();
            $table->foreignId('fk_item_id')
                ->references('id')
                ->on('items')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE')
                ->constrained();
            $table->float('argent');
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
        Schema::dropIfExists('inventaires');
    }
}
