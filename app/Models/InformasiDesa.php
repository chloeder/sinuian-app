<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiDesa extends Model
{
  use HasFactory;

  protected $casts = [
    'tags' => 'array',
  ];

  protected $fillable = [
    'judul',
    'isi',
    'tag',
    'cover',
    'views',
    'author'
  ];

  public function user()
  {
    return $this->belongsTo(User::class, 'author', 'id');
  }
}
