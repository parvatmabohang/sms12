<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('employees')) {
          //
        } else {
            Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employee_code',50);
            $table->string('joining_date',50);
            $table->string('department',10);
            $table->string('designation',50);
            $table->string('qualification',50);
            $table->string('total_experience',50);
            $table->string('employee_name',50);
            $table->string('dob',50);
            $table->enum('gender', ['0', '1','2']);
            $table->string('blood_group',10);
            $table->string('birth_place',50);
            $table->string('nationality',50);
            $table->string('mother_tongue',50);
            $table->string('religion',50);
            $table->string('caste',50);
            $table->string('permanent_address',50);
            $table->string('present_address',50);
            $table->string('city',50);
            $table->string('country',50);
            $table->string('state',50);
            $table->string('phone',50);
            $table->integer('mobile');
            $table->string('email',50);
            $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
