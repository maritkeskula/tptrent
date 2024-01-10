<?php

namespace Database\Seeders;

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
        $this->call(ProductSeeder::class);

        \App\Models\User::factory()->create([
            'name' => 'Marit Kesküla',
            'email' => 'maritkeskula@mail.com',
        ]);
    }
}