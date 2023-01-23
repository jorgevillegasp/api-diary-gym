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
            $table->bigInteger('rutine_id');
            $table->bigInteger('user_id');

            // $table->index(["user_id"], 'fk_users_routines_User_idx');
            // $table->index(["rutine_id"], 'fk_users_routines_routines1_idx');


            $table->foreign('user_id', 'fk_users_routines_User_idx')
                ->references('id')->on('users')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->foreign('rutine_id', 'fk_users_routines_routines1_idx')
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
