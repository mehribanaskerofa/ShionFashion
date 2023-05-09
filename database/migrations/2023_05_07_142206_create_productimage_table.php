<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('productimage', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->unsignedBigInteger('category_id');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('category')->onDelete('CASCADE');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('productimage');
    }
};
