<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('studentparents')) {
          //
        } else {
            Schema::create('studentparents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_register_number',50);
            $table->string('father_name',50);
            $table->integer('father_mobile');
            $table->string('father_job',50);
            $table->string('mother_name',50);
            $table->integer('mother_mobile');
            $table->string('mother_job',50);
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
        Schema::dropIfExists('parents');
    }
}
