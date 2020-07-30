<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->string('name', 50);
            $table->string('img', 50);
            $table->string('price', 120);
            $table->enum('new', ['yes', 'no']);
            $table->char('discount', 4);
            $table->string('pre_price', 50);
            $table->integer('categories_id')->unsigned();
            $table->foreign('categories_id')->references('id')->on('navigations');
            $table->string('cuantity', 20);
            $table->string('raiting', 5);
            $table->text('text');
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
        Schema::dropIfExists('products');
    }
}