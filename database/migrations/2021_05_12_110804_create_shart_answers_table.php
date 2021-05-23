<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShartAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shart_answers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unsigned();;
            $table->unsignedBigInteger('shart_id')->unsigned();;
            $table->string('answer_media');
            $table->boolean('checking')->default(false);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('shart_id')->references('id')->on('sharts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shart_answers');

    }
}
