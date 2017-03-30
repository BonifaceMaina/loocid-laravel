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
        $role = new Role();
        $roleUser = $role->create([
            'name' => 'basic_user',
            'slug' => 'user',
            'description' => 'can view basic pages on the website'
        ]);

        $role = new Role();
        $roleProuser = $role->create([
            'name' => 'pro_user',
            'slug' => 'prouser',
            'description' => 'Has access to more information about organizations'
        ]);

        $role = new Role();
        $roleDonor = $role->create([
            'name' => 'donor',
            'slug' => 'donor',
            'description' => 'Has more detailed information about specific organizations.'
        ]);

    }
}
