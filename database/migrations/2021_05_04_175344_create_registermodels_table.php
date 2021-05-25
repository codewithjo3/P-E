<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistermodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registermodels', function (Blueprint $table) {
            
            $table->id("id");
            $table->string("Fname");
            $table->string("Lname");
            $table->string("Hno");
            $table->string("Street");
            $table->string("City");
            $table->string("Pincode");
            $table->string("Email") ->unique();
            $table->string("Mob") ->unique();
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
        Schema::dropIfExists('registermodels');
    }
}
