<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableParticipations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participations', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('country');
            $table->string('email');
            $table->string('nationality')->nullable();
            $table->string('tel')->nullable();
            $table->string('status')->default('unpaid');
            $table->integer('price')->nullable();
            $table->string('adress')->nullable();
            $table->string('deluxeroom')->default('0');
            $table->string('juniorsuite')->default('0');
            $table->string('prestigesuite')->default('0');
            $table->string('roh')->default('0');
            $table->string('superiorriad')->default('0');
            $table->string('premuimriad')->default('0');
            $table->string('couple')->default('0');
            $table->string('single')->default('0');
            $table->string('partnername')->nullable();

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
        Schema::dropIfExists('participations');
    }
}
