<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminExists = DB::table('users')->where('email', 'admin@example.com')->exists();
        if (!$adminExists) {
            DB::table('users')->insert([
                'name' => 'admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('admin'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
            $this->command->info('Admin user created with email: admin@example.com and password: admin');
        } else {
            $this->command->info('Admin user already exists.');
        }
    }
}