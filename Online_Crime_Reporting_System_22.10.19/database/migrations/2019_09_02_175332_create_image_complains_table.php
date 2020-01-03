<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageComplainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_complains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('complain_id');
            $table->string('image')->nullable();
            $table->timestamps();

            $table->foreign('complain_id')->references('id')->on('complains')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('image_complains');
    }
}
