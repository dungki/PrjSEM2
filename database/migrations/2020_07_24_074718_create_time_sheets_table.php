<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimeSheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_sheets', function (Blueprint $table) {
            $table->increments("id");
            $table->unsignedInteger('salary_id');
            $table->date('work_date');
            $table->float('checkin');
            $table->float('checkout');
            $table->float('working_time');
            $table->integer('amount');
            $table->date('created_at');
            $table->date('updated_at');
            $table->float('resttime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('time_sheets');
    }
}
