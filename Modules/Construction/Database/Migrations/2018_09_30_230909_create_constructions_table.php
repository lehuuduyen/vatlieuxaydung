<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConstructionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constructions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ma_ct');
            $table->string('name');
            $table->text('description');
            $table->date('date_start');
            $table->date('date_end');
            $table->float('tiendo',3,1);
            $table->integer('tongchiphi');
            $table->integer('giatrihd');
            $table->integer('chiphiphatsinh');
            $table->integer('giatritong');
            $table->integer('captain_id');
            $table->integer('user_id');
            $table->tinyInteger('status')->default(0);

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
        Schema::dropIfExists('constructions');
    }
}
