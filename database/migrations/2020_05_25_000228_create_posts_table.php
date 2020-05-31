<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {

            //método de criação e relacionamento da tabela posts no banco de dados.
            $table->id();
            $table->unsignedBigInteger('author');
            $table->string('title');
            $table->string('slug');
            $table->string('subtitle');
            $table->text('content');
            $table->timestamps();

            //relação entre as tabelas a partir de uma foreign key
            $table->foreign('author')->references('id')->on('users')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
