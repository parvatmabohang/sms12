<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClass1subjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('class1subjects')) {
          //
        } else {
            Schema::create('class1subjects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject',50);
            $table->string('subject_code',50);
            $table->integer('subject_theory_fm');
            $table->integer('subject_theory_pm');
            $table->integer('subject_practical_fm');
            $table->integer('subject_practical_pm');
            $table->string('subject_teacher',50);
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
        Schema::dropIfExists('class1subjects');
    }
}
