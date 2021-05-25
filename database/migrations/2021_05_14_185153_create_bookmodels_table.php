<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookmodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookmodels', function (Blueprint $table) {
            $table->id('id');
            
            $table->unsignedBigInteger('Categoryid');
            $table->foreign('Categoryid')->references('id')->on('categorymodels')->onUpdate('cascade')->OnDelete('cascade');   

            $table->unsignedBigInteger('Locationid');
            $table->foreign('Locationid')->references('id')->on('locationmodels')->onUpdate('cascade')->OnDelete('cascade');
            
            $table->unsignedBigInteger('workerid');
            $table->foreign('workerid')->references('id')->on('workermodels')->onUpdate('cascade')->OnDelete('cascade');

            $table->unsignedBigInteger('customerid');
            $table->foreign('customerid')->references('id')->on('registermodels')->onUpdate('cascade')->OnDelete('cascade');

            $table->string("date");
            $table->string("time");

            

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
        Schema::dropIfExists('bookmodels');
    }
}
