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
        Schema::create('kin_addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kin_id');
            $table->String('phone_no_1');
            $table->String('phone_no_2');
            $table->String('sub_city');
            $table->String('woreda');
            $table->String('house_no');

            $table->foreign('kin_id')->references('id')->on('kin');
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
        Schema::dropIfExists('kin_addresses');
    }
};
