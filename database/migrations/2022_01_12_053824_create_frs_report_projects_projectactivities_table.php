<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrsReportProjectsProjectactivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frs_report_projects_projectactivities', function (Blueprint $table) {
            $table->id();
            $table->string('report_id');
            $table->integer('project_id')->unsigned();
            $table->integer('project_activity_id')->unsigned();
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
        Schema::dropIfExists('frs_report_projects_projectactivities');
    }
}
