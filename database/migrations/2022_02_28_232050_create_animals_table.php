<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    public function up()
    {
        Schema::create('animals', function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->bigInteger('base_id')->unsigned();
            $table->string('species', 250);
            $table->string('name', 250)->nullable();
            $table->foreignId('trainer_id')->constrained();
        });
    }

    public function down()
    {
        Schema::drop('animals');
    }
}
