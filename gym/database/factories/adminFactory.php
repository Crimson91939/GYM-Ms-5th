<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\admin;
use Faker\Generator as Faker;

$factory->define(admin::class, function (Faker $faker) {
    return [
        'username'=>'admin',
        'password'=> '$2y$10$dbxS5RRHRMaJUZoS7dqXT.qBMN8lYpKseMcfINpxtlnDiaLHFZt3O',
        'email'=>'admin@gmail.com',
        'phno'=>'0000000000'
    ];
});
