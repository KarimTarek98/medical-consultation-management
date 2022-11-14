<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        /*User::create([
            'name' => 'Admin',
            'email' => 'admin@medcity.com',
            'password' => Hash::make('12345678'),
            'is_admin' => 1
        ]);*/
        $this->call(DoctorSeeder::class);
        $this->call(LaratrustSeeder::class);
    }
}
