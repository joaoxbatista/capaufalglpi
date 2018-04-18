<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectorCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sector_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('icon')->nullable();
            $table->text('description')->nullable();
            $table->integer('sector_id')->unsigned();
            $table->foreign('sector_id')->references('id')->on('sectors')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sector_categories');
    }
}
