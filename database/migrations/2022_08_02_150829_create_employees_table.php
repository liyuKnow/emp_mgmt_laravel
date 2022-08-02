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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->String('first_name');
            $table->String('middle_name');
            $table->String('last_name');
            $table->String('emp_img');
            $table->date('date_employed');
            $table->date('date_dismissed')->nullable();
            $table->String('salary');
            $table->String('leave_status');
            $table->String('job_title');
            $table->String('status');
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
        Schema::dropIfExists('employees');
    }
};
