<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiplomasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diplomas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('transaction_hash');
            $table->boolean('gender');
            $table->string('rank');
            $table->string('from_year',4);
            $table->string('to_year',4);
            $table->string('qrcode');

            //update sau type_tranning và id_mode_study

            //2 cái khóa ngoại
            $table->string('user_name',50);
            $table->foreign('user_name')->references('user_name')->on('users');
            $table->integer('major_id')->unsigned();
            $table->foreign('major_id')->references('id')->on('majors');


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
        Schema::dropIfExists('diplomas');
    }
}
