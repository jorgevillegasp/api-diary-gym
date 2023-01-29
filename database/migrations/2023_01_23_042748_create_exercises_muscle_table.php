<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercise_muscle', function (Blueprint $table) {
            //TODO: Resolver: que no se repitan las uniones
            // Es decir que no haya 1-1 1-2 1-1
            //Posible solucion. pero no nos deja poner en null
            //$table->primary(['muscle_id','exercise_id']);
            $table->unsignedBigInteger('muscle_id')->nullable();
            $table->unsignedBigInteger('exercise_id')->nullable();

            $table->foreign('muscle_id')
                ->references('id')->on('muscles')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->foreign('exercise_id')
                ->references('id')->on('exercises')
                ->onDelete('set null')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exercise_muscle');
    }
};
