<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = [
            [
                'name'      => 'Laura',
                'email'     => $faker->safeEmail(),
                'password'  => Hash::make($faker->password(8, 16)),
            ],
            [
                'name'      => 'Giuseppe',
                'email'     => $faker->safeEmail(),
                'password'  => Hash::make($faker->password(8, 16)),
            ],
            [
                'name'      => 'Elena',
                'email'     => $faker->safeEmail(),
                'password'  => Hash::make($faker->password(8, 16)),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
