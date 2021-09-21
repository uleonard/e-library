<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesModuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes_module', function (Blueprint $table) {
            $table->integer('class_id')->unsigned();
            $table->integer('module_id')->unsigned();        
            $table->foreign('class_id')->references('id')->on('modules')->onDelete('cascade');
            $table->foreign('module_id')->references('id')->on('classes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classes_module');
    }
}
