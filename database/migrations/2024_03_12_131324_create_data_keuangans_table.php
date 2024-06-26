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
    Schema::create('data_keuangans', function (Blueprint $table) {
      $table->id();
      $table->string('kategori');
      $table->string('uraian');
      $table->string('volume')->nullable();
      $table->string('satuan')->nullable();
      $table->string('anggaran');
      $table->string('sumber_dana');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('data_keuangans');
  }
};
