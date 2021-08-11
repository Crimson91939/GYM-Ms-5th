<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\member;
use Faker\Generator as Faker;

$factory->define(member::class, function (Faker $faker) {
    return [
        'gym_id'=>'1',
        'email'=>$faker->Email,
        'password'=>'$2y$10$dbxS5RRHRMaJUZoS7dqXT.qBMN8lYpKseMcfINpxtlnDiaLHFZt3O',
        'name'=>$faker->Name,
        'phno'=>$faker->phoneNumber,
        'gender'=>'male' or 'femaile',
        'age'=>'22',
        'username'=>$faker->username,
        'remember_token' => Str::random(10),
        'status'=>'1',
    ];
});
//        factory(App\member::class)->create();