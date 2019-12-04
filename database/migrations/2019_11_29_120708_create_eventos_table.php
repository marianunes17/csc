<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
           /* $table->bigIncrements('id');
            $table->string('nome');
            $table->string('descricao');
            $table->datetime('data');
            $table->string('imagem')->nullable();
            $table->unsignedBigInteger('categoria');
            $table->timestamps();
            $table->foreign('categoria')->references('id')->on('categoria');*/

            $table->bigIncrements('id');
            $table->string('nome', 100);
            $table->dateTime('data');
            $table->text('descricao');
            $table->string('image')->nullable();
            $table->string('viewMore')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categoria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
}
