<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->string('duration');
            $table->enum('status', ['Done', 'Not Done']);//Alleen "Done" of "Not Done" mag ingevuld worden. 
            $table->integer('list_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('task', function ($table){
            $table->foreign('list_id')->references('id')->on('list')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task');
    }
}
