<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->integer('niss')->default(0);
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('alias')->nullable();
            $table->string('gender')->nullable();
            $table->date('dob')->nullable();
            $table->string('email')->nullable();
            $table->integer('telephone')->nullable();
            $table->string('nationality')->nullable();
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
        Schema::dropIfExists('user_details');
    }
}
