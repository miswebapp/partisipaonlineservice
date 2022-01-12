<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrsReportMonitoringtoolsRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frs_report_monitoringtools_ratings', function (Blueprint $table) {
            $table->id();
            $table->string('report_id');
            $table->integer('monitoring_id')->unsigned();
            $table->integer('rating_id')->unsigned();
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
        Schema::dropIfExists('frs_report_monitoringtools_ratings');
    }
}
