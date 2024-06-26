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
    Schema::create('informasi_desas', function (Blueprint $table) {
      $table->id();
      $table->string('judul');
      $table->string('isi');
      $table->string('tag');
      $table->string('cover');
      $table->bigInteger('views')->default(0);
      $table->unsignedBigInteger('author');
      $table->foreign('author')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('informasi_desas');
  }
};
