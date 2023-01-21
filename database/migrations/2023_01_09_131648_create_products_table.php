<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("price")->nullable();
            $table->string("status")->nullable();
            $table->string("location")->nullable();
            $table->string("description")->nullable();
            $table->string("image_one")->nullable();
            $table->string("image_two")->nullable();
            $table->string("image_three")->nullable();
            $table->string("image_four")->nullable();

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
        Schema::dropIfExists('products');
    }
};
