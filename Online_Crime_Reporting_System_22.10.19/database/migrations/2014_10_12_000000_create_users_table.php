<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('voterId')->unique();
            $table->string('gender',64);
            $table->string('age',64);
            $table->longText('address');
            $table->string('phone');
            $table->string('image');
            $table->tinyInteger('email_verified')->default(0); //new
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('email_verification_token'); //new
            $table->string('password');
            $table->rememberToken();
            $table->softDeletes(); //new
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
        Schema::dropIfExists('users');
    }
}
