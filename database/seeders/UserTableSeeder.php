<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name'      => 'Admin',
            'email'     => 'admin@example.com',
            'password'  => bcrypt('123'),
            'type'      => User::ADMIN,
        ]);

        User::factory()->create([
            'name'      => 'Jan Kowalski',
            'email'     => 'jan@example.com',
            'password'  => bcrypt('123'),
            'type'      => User::MODERATOR,
        ]);

        User::factory()->create([
            'name'      => 'Kasia Mazur',
            'email'     => 'kasia@example.com',
            'password'  => bcrypt('123'),
            'type'      => User::DEFAULT,
        ]);

        User::factory()->count(5)->create();
    }
}
