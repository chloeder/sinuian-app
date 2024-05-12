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
    Schema::create('usahas', function (Blueprint $table) {
      $table->id();
      $table->string('nama_umkm')->unique();
      $table->string('nama_pemilik')->unique();
      $table->string('jenis_produk');
      $table->string('alamat_usaha');
      $table->bigInteger('no_telp')->unique()->nullable();
      $table->string('sosial_media')->nullable();
      $table->string('image')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('usahas');
  }
};
