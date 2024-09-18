<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->id();
            $table->string('Not_Titulo');
            $table->string('Not_Fecha')->nullable();
            $table->text('Not_Estado')->nullable();
            $table->text('Not_Descripcion');
            $table->string('Not_imagen');
            $table->string('Not_imagen2');
            $table->text('Not_ImgDesc')->nullable();


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
        Schema::dropIfExists('noticias');
    }
}
