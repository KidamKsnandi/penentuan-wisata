<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Membuat Sample Role
        $superadminRole = new Role();
        $superadminRole->name = "superadmin";
        $superadminRole->display_name = "Super Administrator";
        $superadminRole->save();

        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Administrator";
        $adminRole->save();

        // Membuat Sample User
        $superadmin = new User();
        $superadmin->name = 'Super Admin Penentuan Wisata';
        $superadmin->email = 'superadmin@gmail.com';
        $superadmin->password = Hash::make('superadmin12345');
        $superadmin->save();
        $superadmin->attachRole($superadminRole);

        $admin = new User();
        $admin->name = 'Admin Penentuan Wisata';
        $admin->email = 'admin@gmail.com';
        $admin->password = Hash::make('admin12345');
        $admin->save();
        $admin->attachRole($adminRole);

    }
}
