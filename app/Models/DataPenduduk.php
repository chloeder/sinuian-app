<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPenduduk extends Model
{
  use HasFactory;

  protected $fillable = [
    'no_kk',
    'nama_lengkap',
    'alamat',
    'tanggal_lahir',
    'jenis_kelamin',
  ];
}
