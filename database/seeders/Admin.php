<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Admin extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $admin = [
      'username' => 'Nostradamus',
      'email' => 'admin@site.dev',
      'phone_number' => '081241211990',
      'password' => bcrypt('12345678'),
    ];

    User::create($admin);
  }
}
