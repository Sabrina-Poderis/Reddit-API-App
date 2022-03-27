<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    //  Você deve salvar título da postagem, nome do autor, timestamp da criação, número de "ups" e número de comentários
    public function up()
    {
        Schema::create('hot_posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->integer('ups');
            $table->integer('num_comments');
            $table->timestamp('post_created_at');
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
        Schema::dropIfExists('hot_posts');
    }
}
