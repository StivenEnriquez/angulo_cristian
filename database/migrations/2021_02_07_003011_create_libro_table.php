<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libro', function (Blueprint $table) {
            $table->id();
            $table->string('ISBN', 10); // Varchar
            $table->string('titulo', 200); // Varchar
            $table->double('precio', 8,2); // Varchar
            $table->bigInteger('editorial')->unsigned();
             $table->foreign('editorial')  //Creación de la llave foranea
                  ->references('id')  // Referencia al atributo
                  ->on('editorial')  // De que tabla
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
        Schema::dropIfExists('libro');
    }
}
