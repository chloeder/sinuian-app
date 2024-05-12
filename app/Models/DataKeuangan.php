<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKeuangan extends Model
{
  use HasFactory;

  protected $fillable = [
    'uraian',
    'kategori',
    'volume',
    'satuan',
    'anggaran',
    'sumber_dana',
  ];
}
