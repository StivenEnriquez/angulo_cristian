<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEditorialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('editorial', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100); // Varchar
            $table->string('direccion', 60); // Varchar
            $table->string('ciudad', 30); // Varchar
            $table->string('telefono', 30); // Varchar
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
        Schema::dropIfExists('editorial');
    }
}
