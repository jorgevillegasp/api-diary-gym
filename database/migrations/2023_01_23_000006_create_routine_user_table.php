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
        Schema::create('routine_user', function (Blueprint $table) {
            $table->unsignedBigInteger('routine_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->foreign('routine_id')
                ->references('id')->on('routines')
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
        Schema::dropIfExists('routine_user');
    }
};
