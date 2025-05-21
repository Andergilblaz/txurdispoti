<?php

namespace Database\Seeders;

use App\Models\PodcastUser;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Llama al seeder de User
         $this->call(PodcastSeeder::class);
         $this->call(PlaylistSeeder::class);
         $this->call(UserSeeder::class);
         $this->call(SongsSeeder::class);
        $this->call(UserPodcastSeeder::class);


        /*         User::factory()->count(10)->create();
         */
    }
}
