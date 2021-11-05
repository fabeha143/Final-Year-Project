<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Employees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('emp_id');
            $table->string('emp_fname');
            // $table->string('emp_lname');
            // $table->string('emp_email');
            // $table->string('emp_gender');
            // $table->date('emp_joining_date');
            // $table->integer('emp_phone');
            // $table->string('emp_address');
            // $table->string('emp_username');
            // $table->string('emp_password');
            // $table->string('emp_confirmpassword');
            // $table->bigInteger('emp_role')->unsigned()->index()->nullable(false);
            // $table->foreign('emp_role')->references('id')->on('employee_roles')->onDelete('cascade')->onUpdate('cascade');
            // $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
