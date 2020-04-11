<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrsSucosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frs_sucos', function (Blueprint $table) {
            $table->id();
            $table->integer('municipal_id')->unsigned();
            $table->integer('posto_id')->unsigned();
            $table->string('name');
            $table->string('longitude');
            $table->string('latitude');
            $table->string('description')->nullable();
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
        Schema::dropIfExists('frs_sucos');
    }
}
