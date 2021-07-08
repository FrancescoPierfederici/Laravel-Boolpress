<?php

use Illuminate\Database\Seeder;
use App\Role;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $roles =['SuperAdmin', 'Admin', 'NormalUser', 'Guest'];
        foreach ($roles as $role) {
            $newRole = new Role();
            $newRole->roleName = $role;
            $newRole->save();
        }
    }
}
