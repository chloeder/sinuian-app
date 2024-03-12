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
    Schema::create('wajib_lapors', function (Blueprint $table) {
      $table->id();
      $table->string('nama_tamu');
      $table->string('keperluan_bertamu');
      $table->string('lama_bertamu');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('wajib_lapors');
  }
};
