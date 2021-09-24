<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivityTrackingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_tracking', function (Blueprint $table) {
            $table->id();
            $table->string('username',30);
            $table->string('firstname',30);
            $table->string('surname',30);
            $table->string('gender',6);
            $table->string('activity_type',20);
            $table->string('activity_desc',255);
            $table->string('user_role',20);
            $table->string('student_reg_number',20)->nullable();
            $table->string('class',20)->nullable();
            $table->string('programme',10)->nullable();
            $table->string('department',5)->nullable();
            $table->string('student_type',30)->nullable();
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
        Schema::dropIfExists('activity_tracking');
    }
}
