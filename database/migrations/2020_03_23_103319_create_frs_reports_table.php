<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrsReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frs_reports', function (Blueprint $table) {
            $table->id();
            $table->string('report_id');
            $table->integer('user_id')->unsigned();
            $table->integer('team_id')->unsigned();
            $table->integer('program_id')->unsigned();
            $table->integer('activity_id')->unsigned();
            $table->text('comment');
            $table->text('recommendation');
            $table->date('report_date');
            $table->date('submitted_date');
            $table->integer('status');
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
        Schema::dropIfExists('frs_reports');
    }
}
