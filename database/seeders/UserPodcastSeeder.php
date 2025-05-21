<?php

namespace Database\Seeders;

use App\Models\PodcastUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserPodcastSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();

        $PodcastUser = new PodcastUser();
        $PodcastUser->user_id = 1;
        $PodcastUser->podcast_id = 1;
        $PodcastUser->created_at = $now;
        $PodcastUser->updated_at = $now;
        $PodcastUser->save();

        $PodcastUser = new PodcastUser();
        $PodcastUser->user_id = 1;
        $PodcastUser->podcast_id = 3;
        $PodcastUser->created_at = $now;
        $PodcastUser->updated_at = $now;
        $PodcastUser->save();

        $PodcastUser = new PodcastUser();
        $PodcastUser->user_id = 1;
        $PodcastUser->podcast_id = 5;
        $PodcastUser->created_at = $now;
        $PodcastUser->updated_at = $now;
        $PodcastUser->save();

        $PodcastUser = new PodcastUser();
        $PodcastUser->user_id = 1;
        $PodcastUser->podcast_id = 6;
        $PodcastUser->created_at = $now;
        $PodcastUser->updated_at = $now;
        $PodcastUser->save();

        $PodcastUser = new PodcastUser();
        $PodcastUser->user_id = 2;
        $PodcastUser->podcast_id = 10;
        $PodcastUser->created_at = $now;
        $PodcastUser->updated_at = $now;
        $PodcastUser->save();

        $PodcastUser = new PodcastUser();
        $PodcastUser->user_id = 3;
        $PodcastUser->podcast_id = 16;
        $PodcastUser->created_at = $now;
        $PodcastUser->updated_at = $now;
        $PodcastUser->save();
    }
}
