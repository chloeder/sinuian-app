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
    Schema::table('wajib_lapors', function (Blueprint $table) {
      $table->foreignId('jaga_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::table('wajib_lapors', function (Blueprint $table) {
      $table->dropForeign(['jaga_id']);
      $table->dropColumn('jaga_id');
    });
  }
};
