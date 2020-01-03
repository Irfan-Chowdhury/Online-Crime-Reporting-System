<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCriminalRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criminal_records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('admin_id');
            $table->unsignedInteger('crimeCategory_id'); //complainCategory_Id
            $table->string('name',64);
            $table->longText('description');
            $table->longText('address')->nullable();
            $table->string('image');
            $table->string('status',64);
            $table->string('show',64);
            $table->timestamps();

            // $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');  //here not use in

            // $table->foreign('admin_id')->references('id')->on('admins');
            // $table->foreign('crimeCategory_id')->references('id')->on('crime_categories'); //complain_categories
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('criminal_records');
    }
}
