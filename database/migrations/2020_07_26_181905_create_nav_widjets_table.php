<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavWidjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navWidjets', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('img', 50);
            $table->bigInteger('nav_id')->unsigned();
            $table->foreign('nav_id')->references('id')->on('navigations');
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
        Schema::dropIfExists('navWidjets');
    }
}
