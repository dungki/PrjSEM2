<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaries', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('user_id');
            $table->BigInteger('payBy_id')->nullable();
            $table->date('started_at');
            $table->date('finished_at')->nullable();
            $table->integer('total_salary');
            $table->date('pay_day')->nullable();
            $table->tinyInteger('status');
            $table->datetime('created_at');
            $table->datetime('updated_day')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salaries');
    }
}
