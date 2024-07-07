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
        Schema::create('in_out_table',function (Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->timestamp('in')->nullable();
            $table->timestamp('go_pause')->nullable();
            $table->timestamp('back_pause')->nullable();
            $table->timestamp('out')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     *
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('in_out_table');
    }
};
