<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->string('name');
            $table->string('cover');
            $table->text('description');
            $table->integer('author');
            $table->integer('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->integer('category_parent_id');
            $table->foreign('category_parent_id')->references('parent_id')->on('categories');
            $table->integer('provider_id');
            $table->foreign('provider_id')->references('id')->on('providers');
            $table->integer('inventory');
            $table->integer('status');
            $table->decimal('views', 10, 0);
            $table->decimal('price', 9, 2);
            $table->date('begins_at');
            $table->date('ends_at');
            $table->rememberToken();
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
        Schema::drop('products');
    }
}
