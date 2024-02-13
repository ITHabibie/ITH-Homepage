<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->integer('top_bar')->default('0');
            $table->integer('side_bar')->default('0');
            $table->integer('top')->default('0');
            $table->integer('mid')->default('0');
            $table->integer('bottom')->default('0');
            $table->integer('alt1')->default('0');
            $table->integer('alt2')->default('0');
            $table->integer('alt3')->default('0');
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
        Schema::dropIfExists('pages');
    }
}
