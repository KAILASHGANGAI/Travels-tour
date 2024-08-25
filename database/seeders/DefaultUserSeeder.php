<?php

namespace Database\Seeders;

use App\Models\Admin\AdminUser;
use App\Models\Web\CustomerUser;
use Illuminate\Database\Seeder;


class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CustomerUser::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);
        AdminUser::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
            'is_super_admin' => 1
        ]);
    }
}
