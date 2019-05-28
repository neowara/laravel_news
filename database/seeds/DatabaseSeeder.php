<?php

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
        // $this->call(UsersTableSeeder::class);

       $user = factory(App\User::class, 30)->create();
       $post = factory(App\Post::class, 300)->create();
    }
}
