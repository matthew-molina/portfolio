<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('article_id');

            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();

            $table->text('description')->nullable();

            $table->integer('order_column')->default(0);

            $table->softDeletes();
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
        Schema::dropIfExists('article_items');
    }
}
