<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = User::create([
            'name' => 'Super Admin User',
            'email' => 'superadmin@example.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => Hash::make('SuperAdmin1234%')
        ]);
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'email_verified_at' => date("Y-m-d H:i:s"),
            'password' => Hash::make('Admin1234%')
        ]);
        $ambassador = User::create([
            'name' => 'Ambassador User',
            'email' => 'ambassador@example.com',
            'email_verified_at' => date("Y-m-d H:i:s"),
            'password' => Hash::make('Ambassador1234%')
        ]);
        $user = User::create([
            'name' => 'Generic User',
            'email' => 'user@example.com',
            'email_verified_at' => date("Y-m-d H:i:s"),
            'password' => Hash::make('User1234%')
        ]);

        $superAdmin->assignRole('super_admin');
        $admin->assignRole('admin');
        $ambassador->assignRole('ambassador');
        $ambassador->user_data()->create(['register_method'=>'email']);
        $user->assignRole('user');
        $user->user_data()->create(['register_method'=>'email']);
    }
}
