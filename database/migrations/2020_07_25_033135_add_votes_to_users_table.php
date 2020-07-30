<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVotesToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('identity_cart',20)->nullable();;
            $table->string('phone', 20)->nullable();;
            $table->date('birthday')->nullable();;
            $table->date('joined_at')->nullable();;
            $table->string('address')->nullable();;
            $table->integer('salary')->nullable();;
            $table->unsignedInteger('department_id')->nullable();;
            $table->unsignedInteger('type_user_id')->nullable();;
            $table->unsignedInteger('role_id')->nullable();;
            $table->tinyInteger('status')->nullable();
            $table->foreign('department_id')->references('id')->on('departments');
            $table->foreign('type_user_id')->references('id')->on('type_users');
            $table->foreign('role_id')->references('id')->on('roles');
        });
        Schema::table('groups', function (Blueprint $table) {
            //
            $table->foreign('department_id')->references('id')->on('departments');
            $table->foreign('user_id')->references('id')->on('users');
        });
        Schema::table('user_contacts', function (Blueprint $table) {
            //
            $table->foreign('user_id')->references('id')->on('users');
        });
        Schema::table('salary_more', function (Blueprint $table) {
            //
            $table->foreign('user_id')->references('id')->on('users');
        });
        Schema::table('salaries', function (Blueprint $table) {
            //
            $table->foreign('user_id')->references('id')->on('users');
        });
        Schema::table('salary_mores_histories', function (Blueprint $table) {
            //
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('salary_id')->references('id')->on('salaries');
        });
        Schema::table('time_sheets', function (Blueprint $table) {
            //
            $table->foreign('salary_id')->references('id')->on('salaries');
        });
        Schema::table('history_time_sheets', function (Blueprint $table) {
            //
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('timeSheet_id')->references('id')->on('time_sheets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}