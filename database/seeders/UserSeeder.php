<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        User::create([
            "name"=> $faker->name,
            "email"=> 'chien@gmail.com',
            'password'=> bcrypt('123456'),
            'role'=> '2',
            'avatar'=>"fas"
        ]);
    }
}
