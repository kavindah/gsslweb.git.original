<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUndergraduateresearchawardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('undergraduateresearchawards', function (Blueprint $table) {
             $table->increments('id');
            $table->string('user_id');
            $table->mediumText('title');
            $table->mediumText('body');
            $table->string('undergraduateresearchaward_image');
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
        Schema::dropIfExists('undergraduateresearchawards');
    }
}
