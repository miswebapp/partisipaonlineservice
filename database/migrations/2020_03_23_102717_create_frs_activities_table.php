<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrsActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frs_activities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('program_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('location_id')->unsigned();
            $table->string('require_capacity');
            $table->string('require_monitoring');
            $table->string('require_cycle');
            $table->string('require_phase');
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
        Schema::dropIfExists('frs_activities');
    }
}
