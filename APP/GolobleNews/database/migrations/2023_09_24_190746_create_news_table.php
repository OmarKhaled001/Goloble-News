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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->unsignedBigInteger('id_editor');
            $table->unsignedBigInteger('id_category');
            $table->string('main_image');
            $table->foreign('id_editor')->references('id')->on('editor')->onDelete('cascade');
            $table->foreign('id_category')->references('id')->on('category')->onDelete('cascade');
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
        Schema::dropIfExists('news');
    }
};
