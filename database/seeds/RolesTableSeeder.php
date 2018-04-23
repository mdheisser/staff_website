<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin Suser for the management of the backend
        $admin = new Role();
        $admin->name  = 'admin';
        $admin->guard_name = 'web';
        $admin->save();

        // Account Manager
        $manager = new Role();
        $manager->name  = 'Street Team';
        $manager->guard_name = 'web';
        $manager->save();

        // Client
        $client = new Role();
        $client->name  = 'Staff';
        $client->guard_name = 'web';
        $client->save();

    }
}