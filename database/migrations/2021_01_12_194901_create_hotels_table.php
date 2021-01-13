<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title',150);
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('category_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->text('detail')->nullable();
            $table->integer('star')->nullable();
            $table->float('price')->nullable();
            $table->text('address',)->nullable();
            $table->integer('phone')->default();
            $table->string('city',20);
            $table->string('country',20);
            $table->string('status',5)->nullable()->default('False');
            $table->string('image',75)->nullable();
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
        Schema::dropIfExists('hotels');
    }
}
