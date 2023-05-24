<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
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
        User::create([
            "name" => "Adi Adnyana",
            "email" => "adiadnyana22@gmail.com",
            "password" => Hash::make('admin'),
            "gender" => "Male",
            "dob" => "2001-11-24",
            "role" => "admin",
            "country_id" => 1
        ]);

        User::create([
            "name" => "Orang",
            "email" => "orang@gmail.com",
            "password" => Hash::make('user'),
            "gender" => "Female",
            "dob" => "2002-4-10",
            "role" => "user",
            "country_id" => 2
        ]);
    }
}
