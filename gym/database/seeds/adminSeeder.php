<?php

use Illuminate\Database\Seeder;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        DB::table('admins')->insert([
            'username'=>'admin',
            'password'=> '$2y$10$dbxS5RRHRMaJUZoS7dqXT.qBMN8lYpKseMcfINpxtlnDiaLHFZt3O',
            'email'=>'admin@gmail.com',
            'phno'=>'0000000000'
        ]);
    }
     
}
