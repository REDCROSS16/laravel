<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title', 250)->nullable()->unique()->comment('Название тудушки'); // varchar
            $table->text('note')->nullable()->comment('Примечание к тудушке');
            $table->unsignedInteger('status')->default(0)->comment('Статус тудушки');
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
        Schema::dropIfExists('todos');
    }
}
