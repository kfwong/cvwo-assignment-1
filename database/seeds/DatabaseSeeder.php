<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::statement('SET FOREIGN_KEY_CHECKS = 0'); // disable foreign key constraints
        DB::table('users')->truncate();
        DB::table('posts')->truncate();
        DB::table('comments')->truncate();

        factory(App\User::class, 5)->create()->each(function($user){
            factory(App\Post::class, random_int(1, 5))->create([
                'post_author' => $user->id
            ]);

            factory(App\Comment::class, random_int(1,5))->create([
                'comment_author' => $user->id,
                'post_id' => random_int(1,5)
            ]);
        });

        DB::statement('SET FOREIGN_KEY_CHECKS = 1'); // enable foreign key constraints

        Model::reguard();
    }
}
