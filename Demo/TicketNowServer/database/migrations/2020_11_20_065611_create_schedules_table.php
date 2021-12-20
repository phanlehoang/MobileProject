<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('ngay');
            $table->string('suatChieu');
            $table->string('choNgoi');
            $table->string('tenPhim')->nullable()->default('');
            $table->string('cumRap')->nullable()->default('');
            $table->unsignedBigInteger('movie_id')->nullable();
            $table->index('movie_id');
            $table->unsignedBigInteger('cinema_id')->nullable();
            $table->index('cinema_id');
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
        Schema::dropIfExists('schedules');
    }
}
