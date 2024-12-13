<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $userData = [
            [
                'email' => 'admin@gmail.com', 'role_id' => 1, 'password' => Hash::make('adminonly'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()
            ],
            [
                'email' => 'member@gmail.com', 'role_id' => 2, 'password' => Hash::make('memberonly'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()
            ],
        ];

        User::insert($userData);
    }
}
