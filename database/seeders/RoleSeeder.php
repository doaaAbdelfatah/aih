<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r = Role::create(["name"=>'admin']);

        $r->givePermissionTo('access dashboard');
        $r->givePermissionTo('register');

        $user = User::find(1);
        $user->assignRole('admin');

        Role::create(["name"=>'customer']);
        Role::create(["name" =>'doctor']);
    }
}
