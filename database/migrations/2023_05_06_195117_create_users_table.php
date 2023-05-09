<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email',255);
            $table->string('password',255);
            $table->string('remember_token',255)->nullable();
            $table->timestamps();
        });
    }
//$table->id();
//$table->string('image');
//$table->unsignedBigInteger('category_id');
//$table->timestamps();
//
//$table->foreign('category_id')->references('id')->on('category')->onDelete('CASCADE');
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
