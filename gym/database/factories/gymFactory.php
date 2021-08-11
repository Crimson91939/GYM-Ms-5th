<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\gym;
use Faker\Generator as Faker;

$factory->define(gym::class, function (Faker $faker) {
    return [
        'admin_id'=>'1',
        'password'=> '$2y$10$dbxS5RRHRMaJUZoS7dqXT.qBMN8lYpKseMcfINpxtlnDiaLHFZt3O',
        'name'=>$faker->company,
        'address'=>$faker->address,
        'gymphno'=>'9876543234',
        'email'=>$faker->unique()->safeEmail,
        'ownername'=>$faker->Name,
        'username'=>$faker->username,
        'phno'=>$faker->phoneNumber,
        'remember_token' => Str::random(10),
        'status'=>'1',
    ];
});
//        factory(App\gym::class)->create();
