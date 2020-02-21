<?php

use App\News;
use App\User;
use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 20)->create()->each(function ($user){
            $user->news()->save(factory(News::class)->make());
        });
    }
}
