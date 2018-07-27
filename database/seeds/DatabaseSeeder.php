<?php

use App\Post;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 200)->create();
        for ($i = 1; $i<10; $i++){
            factory(Post::class, 5)->create(["user_id" => $i]);
        }

        // $this->call(UsersTableSeeder::class);
    }
}
