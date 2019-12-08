<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->description = 'A Admin User';
        $role_admin->save();


        $role_employee = new Role();
        $role_employee->name = 'employee';
        $role_employee->description = 'A Employee User';
        $role_employee->save();

        
    }
}
