<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WajibLapor extends Model
{
  use HasFactory;

  protected $fillable = [
    'nama_tamu',
    'jaga_id',
    'lama_bertamu',
    'keperluan_bertamu'
  ];
}
