<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responses', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->mediumInteger('speaker_id')->unsinged();
            $table->boolean('view_point');
            $table->mediumInteger('board_id')->unsinged();
            $table->string('comment', 400);
            $table->string('url')->nullable();
            $table->tinyInteger('dice')->unsigned();
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
        Schema::dropIfExists('responses');
    }
}
