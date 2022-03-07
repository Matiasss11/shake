<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1000)->create();
        User::create([
            'user' => 'Matias',
            'email' => 'matias@admin.com',
            'password' => bcrypt('123123'),
            'role' => json_encode('Developer'),
            'status' => 1
        ]);
    }
}
