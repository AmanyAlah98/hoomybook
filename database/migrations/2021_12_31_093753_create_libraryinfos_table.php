<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibraryinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libraryinfos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->double('phone_number');
            $table->string ('image_library') -> nullable();
            $table->string ('facebook') -> nullable();
            $table->string ('email') -> nullable();
            $table->string ('hour_close_open');
            $table->string ('location');



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
        Schema::dropIfExists('libraryinfos');
    }
}
