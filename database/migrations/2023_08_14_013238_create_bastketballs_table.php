<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBastketballsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bastketballs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('voleibol_id')->unique();
            //cramos la relacion a nivel de migraciones
            $table->foreign('voleibol_id')
                ->references('id')
                ->on('volleyballs')
                ->onDelete('cascade');
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
        Schema::dropIfExists('bastketballs');
    }
}
