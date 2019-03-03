<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->string('name');
            $table->string('profile');
            $table->tinyInteger('proficiency')->unsigned();
            $table->tinyInteger('operability')->unsigned();
            $table->tinyInteger('range')->unsigned();
            $table->tinyInteger('influential')->unsigned();
            $table->tinyInteger('cost')->unsigned();
            $table->tinyInteger('level')->unsigned();
            $table->string('restrictionA', 30)->nullable();
            $table->string('restrictionB', 30)->nullable();
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
        Schema::dropIfExists('skills');
    }
}
