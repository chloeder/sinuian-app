<?php

namespace Database\Seeders;

use App\Models\Jaga;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JagaSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $jaga = [
      [
        'nama' => 'Jaga I',
        'kepala_jaga' => 'JEFRY ENGKA'
      ],
      [
        'nama' => 'Jaga II',
        'kepala_jaga' => 'DEIBY MAKAREWA'
      ],
      [
        'nama' => 'Jaga III',
        'kepala_jaga' => 'JAYFRI KUMONTOY'
      ],
      [
        'nama' => 'Jaga IV',
        'kepala_jaga' => 'OLVA IMELDA OWAY'
      ],
    ];

    foreach ($jaga as $j) {
      Jaga::create($j);
    }
  }
}
