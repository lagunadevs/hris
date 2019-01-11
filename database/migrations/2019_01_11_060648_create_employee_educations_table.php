<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_educations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_id');
            $table->string('qualification');
            $table->string('school', 64);
            $table->date('start_date');
            $table->date('completed_date');
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
        Schema::dropIfExists('employee_educations');
    }
}
