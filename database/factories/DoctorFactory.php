<?php

namespace Database\Factories;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class DoctorFactory extends Factory
{
    protected $model = Doctor::class;
    public function definition()
    {
        return [
            'name' => 'Admin',
            'username' =>  fake()->unique()->userName(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'address' => fake()->address(),
            'phone_number' => fake()->phoneNumber(),
            'remember_token' => Str::random(10),
        ];
    }
}
