<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = new Role();
        $role_user->name = 'User';
        $role_user->save();

        $role_prouser = new Role();
        $role_prouser->name = 'ProUser';
        $role_prouser->save();

        $role_donor = new Role();
        $role_donor->name = 'Donor';
        $role_donor->save();
    }
}
