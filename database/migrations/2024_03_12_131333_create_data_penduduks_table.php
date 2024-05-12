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
    Schema::create('data_penduduks', function (Blueprint $table) {
      $table->id();
      $table->string('no_kk');
      $table->string('nama_lengkap');
      $table->string('alamat');
      $table->string('tanggal_lahir');
      $table->string('jenis_kelamin');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('data_penduduks');
  }
};
