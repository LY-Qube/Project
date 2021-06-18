<?php

namespace Database\Seeders;

use App\Models\Information;
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
        User::factory()->create([
            'email' => "admin@project.test",
            "job_position" => "CEO"
        ]);
        Information::factory()->create([
            'user_id' => 1
        ]);
    }
}
