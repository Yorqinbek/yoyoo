<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sharts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('body');
            $table->string('user_submit')->nullable();
            $table->string('user_check')->nullable();
            $table->integer('yo');
            $table->string('type');
            $table->string('tip_name');
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
        Schema::dropIfExists('sharts');
    }
}
