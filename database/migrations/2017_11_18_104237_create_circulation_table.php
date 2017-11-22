<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCirculationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('circulations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('book_name',100);
            $table->integer('book_id');
            $table->float('book_price',10,2);
            $table->integer('book_quantity');
            $table->text('book_short_description');
            $table->text('book_long_description');
            $table->text('book_image');
            $table->tinyInteger('read_status');
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
        Schema::dropIfExists('circulation');
    }
}
