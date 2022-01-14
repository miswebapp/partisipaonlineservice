<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrsReportCategoryCyclePhaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frs_report_category_cycle_phase', function (Blueprint $table) {
            $table->id();
            $table->string('report_id');
            $table->integer('category_id')->unsigned();
            $table->integer('cycle_id')->unsigned();
            $table->integer('phase_id')->unsigned();
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
        Schema::dropIfExists('frs_report_category_cycle_phase');
    }
}
