<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = new Permission();
        $permUser = $permission->create([
            'name'        => 'user',
            'slug'        => 'basicview',
            'description' => 'can view basic organizational information and create organizations'
        ]);

        $permission = new Permission();
        $permProuser = $permission->create([
            'name'        => 'prouser',
            'slug'        => 'prouserview',
            'description' => 'has access to more information about organizations'
        ]);

        $permission = new Permission();
        $permDonor = $permission->create([
            'name'        => 'donor',
            'slug'        => 'donorview',
            'description' => 'Has super level access to information about organizations he/she has donated to.'
        ]);
    }
}
