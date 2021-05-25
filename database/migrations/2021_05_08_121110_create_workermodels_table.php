<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkermodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workermodels', function (Blueprint $table) {
           
            $table->id('id');
            $table->string("Fname");
            $table->string("Lname");
            $table->string("Gender");
            $table->string("Hno");
            $table->string("Street");
            $table->string("City");
            $table->string("Pincode");
            $table->string("Email") ->unique();
            $table->string("Mob") ->unique();
            $table->string("Idproof");
            $table->string("Idproofno");
            $table->string("Wtype");
            $table->unsignedBigInteger('Categoryid');
            $table->foreign('Categoryid')->references('id')->on('categorymodels')->onUpdate('cascade')->OnDelete('cascade');   
            $table->unsignedBigInteger('Locationid');
            $table->foreign('Locationid')->references('id')->on('locationmodels')->onUpdate('cascade')->OnDelete('cascade');
            $table->string("Filepath");
            $table->string("Description")->nullable();
            $table->string("Status")->default("Active");
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
        Schema::dropIfExists('workermodels');
    }
}
