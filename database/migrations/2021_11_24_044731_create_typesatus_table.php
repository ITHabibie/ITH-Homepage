<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypesatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('typesatus', function (Blueprint $table) {
            $table->id();
            $table->string('menu')->unique();
            $table->string('submenu')->unique();
            $table->string('engmenu')->nullable();
            $table->string('engsubmenu')->nullable();
            $table->string('slug');
            $table->string('image');
            $table->string('status');
            $table->longText('desc');
            $table->longText('engdesc');
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
        Schema::dropIfExists('typesatus');
    }
}
