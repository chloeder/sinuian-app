<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usaha extends Model
{
  use HasFactory;
  protected $casts = [
    'jenis_produk' => 'array',
  ];

  protected $fillable = [
    'nama_umkm',
    'nama_pemilik',
    'jenis_produk',
    'alamat_usaha',
    'no_telp',
    'sosial_media',
    'image',
  ];
}
