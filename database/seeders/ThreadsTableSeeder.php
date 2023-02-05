<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Thread;

class ThreadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Thread::factory()->count(5)->create(['author_id' => 2]);
        Thread::factory()->count(5)->create(['author_id' => 3]);

    }
}
