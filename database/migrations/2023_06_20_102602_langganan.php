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
        //
        Schema::create('langganan',function(Blueprint $table){  
            $table->bigIncrements('id');
            $table->string('email');
            $table->date('tanggal_langganan');
            $table->date('tanggal_kadaluwarsa');
            $table->date('tanggal_sekarang');
            $table->string('sisa_waktu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::drop('langganan');
    }
};
