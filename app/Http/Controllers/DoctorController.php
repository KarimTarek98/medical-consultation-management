<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class DoctorController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.Doctor::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $doctor = Doctor::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'phone_number' => $request->phone_number
        ]);

        event(new Registered($doctor));

        $roles = Role::where('id', 2)->first();
        $doctor->attachRole($roles);

        Auth::login($doctor);

        return redirect(RouteServiceProvider::HOME);
    }
}
