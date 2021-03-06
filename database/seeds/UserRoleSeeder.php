<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin=Role::where('name', 'Admin')->first();
        $role_user=Role::where('name', 'User')->first();

        DB::table('role_user')->insert([
            'user_id' => '1',
            'role_id' => '1',
        ]);
        
        factory(User::class)->create()->each(function ($userrole) use ($role_admin, $role_user) {
            $userrole->roles()->attach([
                $role_user->id
            ]);
        });
    }
}
