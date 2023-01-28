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
        Schema::create('exercises_muscle', function (Blueprint $table) {
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
        Schema::dropIfExists('exercises_muscle');
    }
};
