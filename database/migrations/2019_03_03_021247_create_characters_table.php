<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->mediumIncrements('id')->unsigned();
            $table->mediumInteger('user_id')->unsigned();
            $table->string('name', 30);
            $table->string('profile', 200)->nullable();
            $table->tinyInteger('gender')->unsigned();
            $table->smallInteger('age')->unsigned();
            $table->smallInteger('height')->unsigned();
            $table->smallInteger('weight')->unsigned();
            $table->tinyInteger('size')->unsigned();
            $table->string('talk_image', 30)->nullable();
            $table->string('talk_solid', 30)->nullable();
            $table->tinyInteger('strength')->unsigned();
            $table->tinyInteger('constitution')->unsigned();
            $table->tinyInteger('power')->unsigned();
            $table->tinyInteger('mind')->unsigned();
            $table->tinyInteger('speed')->unsigned();
            $table->tinyInteger('dexterity')->unsigned();
            $table->tinyInteger('intelligence')->unsigned();
            $table->string('port', 300)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characters');
    }
}
