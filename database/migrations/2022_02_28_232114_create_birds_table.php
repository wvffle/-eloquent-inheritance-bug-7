<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBirdsTable extends Migration
{
    public function up()
    {
        Schema::create('birds', function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->bigInteger('base_id')->unsigned();
            $table->boolean('flying')->default(false);
        });
    }

    public function down()
    {
        Schema::drop('birds');
    }
}
