<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentprevdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('studentprevdetails')) {
          //
        } else {
            Schema::create('studentprevdetails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_register_number',50);
            $table->string('prev_school_name',50);
            $table->string('prev_school_address',50);
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
        Schema::dropIfExists('studentprevdetails');
    }
}
