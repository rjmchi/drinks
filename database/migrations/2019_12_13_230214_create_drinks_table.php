<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drinks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('glass');
            $table->unsignedBigInteger('method_id');
            $table->unsignedBigInteger('category_id');
            $table->string('garnish')->nullable();            
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('method_id')->references('id')->on('methods');    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drinks');
    }
}
