<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmploymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employments', function (Blueprint $table) {
            $table->id();
            $table->string('employee_id');
            $table->integer('user_id')->unsigned();
            $table->integer('position_id')->unsigned();
            $table->integer('department_id')->unsigned();
            $table->string('employee_email');
            $table->string('employee_telephone');
            $table->string('employee_startdate');
            $table->string('employee_enddate');
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
        Schema::dropIfExists('employments');
    }
}
