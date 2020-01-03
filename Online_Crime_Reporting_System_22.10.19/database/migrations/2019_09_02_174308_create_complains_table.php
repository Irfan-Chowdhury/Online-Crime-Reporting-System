<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');        //foriegn Key     
            $table->unsignedBigInteger('crimeCategory_id');   //foriegn Key          
            $table->string('title',64)->nullable();            
            $table->longText('description');
            $table->unsignedBigInteger('city_id')->nullable();  //foriegn Key         
            $table->longText('late_long')->nullable();  
            $table->longText('address');  
            $table->string('status',64)->default('PENDING');  
            $table->string('show',64);  
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('crimeCategory_id')->references('id')->on('crime_categories')->onDelete('cascade');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('complains');
    }
}
