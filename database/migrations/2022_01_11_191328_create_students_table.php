<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', '255')->nullable()->comment('имя студента');
            $table->string('last_name', 255)->nullable()->comment('фамилия студента');
            $table->integer('age')->nullable()->comment('возраст');
            $table->integer('group_number')->nullable()->comment('номер группы');
            $table->integer('course_number')->default(1)->comment('номер курса');
            $table->string('specialty', 255)->nullable()->comment('специальность');
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
        Schema::dropIfExists('students');
    }
}
