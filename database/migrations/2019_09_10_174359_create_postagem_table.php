<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostagemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postagem', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo', 120)->nullable();
            $table->longText('descricao');
            $table->string('imagem', 120);
            $table->enum('ativa', ['S', 'N'])->default('N')->comment = "Se a postagem deve aparecer na home | S = Sim | N = Nao";
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postagem');
    }
}
