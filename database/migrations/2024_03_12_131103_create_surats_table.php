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
    Schema::create('surats', function (Blueprint $table) {
      $table->id();
      $table->string('nama');
      $table->string('nik');
      $table->string('email');
      $table->string('pesan');
      $table->string('jenis_surat');
      $table->string('status')->default('Proses');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('surats');
  }
};
