<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerroGatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perro_gatos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('perro_id')->nullable();
            $table->unsignedBigInteger('gato_id')->nullable();

            $table->foreign('perro_id')
            ->references('id')
            ->on('perros')->onDelete('cascade');

            $table->foreign('gato_id')
            ->references('id')
            ->on('gatos')->onDelete('cascade');
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
        Schema::dropIfExists('perro_gatos');
    }
}
