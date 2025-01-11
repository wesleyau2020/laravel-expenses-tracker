<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create a super admin role
        $superAdminRole = Role::create([
            'name' => 'super_admin',
        ]);

        // Create a super admin user
        $superAdminUser = User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@example.com',
            'password' => Hash::make('superadminpassword'),
        ]);

        // Assign the super admin role to the user
        $superAdminUser->roles()->attach($superAdminRole);
    }
}
