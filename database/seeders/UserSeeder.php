<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $users = [
      [
        'name' => 'Sekertaris Desa',
        'email' => 'sekdes01@gmail.com',
        'password' => bcrypt('qwerty1234'),
      ],
    ];

    foreach ($users as $key => $user) {
      User::create($user);
    }
  }
}
