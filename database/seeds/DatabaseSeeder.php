<?php

use Illuminate\Database\Seeder;
use App\User;

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
        
       User::create(['name' => 'Admin', 'last_name' => 'Admin' , 'email' => 'admin@test.com', 'password' => bcrypt('123')]);
       $user = factory(App\User::class, 30)->create();
       $post = factory(App\Post::class, 300)->create();
       $ad = factory(App\Ad::class, 5)->create();
       $this->call(RoleTableSeeder::class);
       $this->call(UserRoleSeeder::class);



    }
}
