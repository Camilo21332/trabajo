<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sport_id')->nullable();

            //relacion con user
            $table->foreign('sport_id')
                ->references('id')
                ->on('sports')->onDelete('set null');
                
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
        Schema::dropIfExists('leons');
    }
}
