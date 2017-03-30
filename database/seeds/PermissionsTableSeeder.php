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
            'slug'        => [
                'view'               => true,
                'createOrganization' => true,
                'editOrganization'   => true,
                'updateOrganization' => true,
                'deleteOrganization' => true
            ],
            'description' => 'can view basic organizational information and CRUD own organizations'
        ]);

        $permission = new Permission();
        $permProuser = $permission->create([
            'name'        => 'prouser',
            'slug'        => [
                'middleAccessView'  => true,
            ],
            'description' => 'has middle level access to all organizations on Loocid'
        ]);

        $permission = new Permission();
        $permDonor = $permission->create([
            'name'        => 'donor',
            'slug'        => [
                'advancedAccessView'  => true,
            ],
            'description' => 'Has super level access to information about organizations he/she has donated to.'
        ]);
    }
}
