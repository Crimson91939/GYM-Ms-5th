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
        $this->call(gymSeeder::class);
        $this->call(memberSeeder::class);
    }
}
//php artisan db:seed --class=UsersTableSeeder