<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i < 100; $i++) {
            if($i%2 == 0) {
                $gender = 'm';
            } else {
                $gender = 'f';
            }
            App\User::create([
                'name' => $faker->firstName,
                'lastname' => $faker->lastName,
                'email' => $faker->email,
                'gender' => $gender,
                'birthdate' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'password' => $faker->md5('password')
            ]);
        }
    }
}
