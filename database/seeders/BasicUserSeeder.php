<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;

class BasicUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create a basic user role
        $basicUserRole = Role::firstOrCreate([
            'name' => 'basic_user',
        ]);

        // Create a basic user
        $basicUser = User::create([
            'name' => 'Basic User',
            'email' => 'basicuser@example.com',
            'password' => Hash::make('basicuserpassword'),
        ]);

        // Assign the basic user role to the user
        $basicUser->roles()->attach($basicUserRole);
    }
}
