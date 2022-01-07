<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookinfos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string ('name');
            $table->string ('author_name');
            $table->double ('price');
            $table->string ('language');
            $table->double('number_of_bage');
            $table->string ('image') -> nullable();
            $table->boolean ('is_available_to_borrow') ->default('0');
            $table->boolean ('is_delinery')->default('0');
            $table->boolean ('is_sale')->default('0');
            $table->string ('reviews');
            $table->bigInteger('category_id')-> unsigned();
            $table-> foreign('category_id')-> references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('bookinfos');
    }
}
