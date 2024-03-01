<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use RolesAndPermissionsSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $admin = User::create([
        //     'name' => 'Admin User',
        //     'email' => 'admin@example.com',
        //     'password' => bcrypt('password'),
        // ]);
        
        // $admin->roles()->attach(Role::where('name', 'admin')->first());
        
        // // Create a regular user
        // $user = User::create([
        //     'name' => 'Regular User',
        //     'email' => 'user@example.com',
        //     'password' => bcrypt('password'),
        // ]);
        
        // $user->roles()->attach(Role::where('name', 'user')->first());
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
