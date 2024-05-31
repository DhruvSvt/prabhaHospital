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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('department_id');
            $table->integer('category_id');
            $table->string('image');
            $table->string('speciality');
            $table->string('degree');
            $table->string('experience');
            $table->string('opdtiming');
            $table->integer('contact');
            $table->string('slug');
            $table->text('excerpt');
            $table->text('body');
            $table->smallInteger('status')->default(1);
            $table->integer('orders')->default(1);
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
        Schema::dropIfExists('doctors');
    }
};
