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
        Schema::create('repetitions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('serie_id')->nullable();
            $table->integer('amount')->nullable();
            $table->decimal('weight', 3, 1)->nullable();
            $table->boolean('completed')->nullable();
            $table->timestamps();

            $table->foreign('serie_id')
                ->references('id')->on('series')
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
        Schema::dropIfExists('repetitions');
    }
};
