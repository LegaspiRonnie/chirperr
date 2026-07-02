<?php

namespace Database\Seeders;

use App\Models\Chirp;
use Illuminate\Database\Seeder;

class ChirpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $count = 50; // Change this to however many chirps you want

        foreach (range(1, $count) as $i) {
            Chirp::create([
                'user_id' => 1,
                'message' => fake()->sentence(rand(5, 15)),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}