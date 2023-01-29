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
        Schema::create('images', function (Blueprint $table) {
            $table->binary('imagen');

            //estas dos seran llaves compuestas
            $table->unsignedBigInteger('imageable_id')->nullable();
            $table->string('imageable_type')->nullable();

            // Crear las llaves primarias compuestas
            // Esto para que no se pueda guardar mas de una imagen
            // con el mismo id de la otra tabla
            $table->primary(['imageable_id','imageable_type']);

            $table->timestamps();
            $table->string('status',1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
};
