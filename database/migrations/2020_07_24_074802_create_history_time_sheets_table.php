<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryTimeSheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_time_sheets', function (Blueprint $table) {
            $table->increments("id");
            $table->unsignedInteger('timeSheet_id');
            $table->unsignedBigInteger('user_id');
            $table->string('note_change',350);
            $table->date('created_at');
            $table->date('updated_at');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('history_time_sheets');
    }
}
