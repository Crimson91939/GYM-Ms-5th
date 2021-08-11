<?php

use Illuminate\Database\Seeder;

class gymSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gyms')->insert([
            [
            'admin_id'=>'1',
            'password'=> '$2y$10$dbxS5RRHRMaJUZoS7dqXT.qBMN8lYpKseMcfINpxtlnDiaLHFZt3O',
            'name'=>'INFINITY GYM',
            'address'=>'Maitidevi',
            'gymphno'=>'9860479654',
            'email'=>'ramanshrestha98@gmail.com',
            'ownername'=>'Raman Shrestha',
            'username'=>'INFINITY',
            'phno'=>'9860479654',
            'status'=>'1',
            ],
            [
                'admin_id'=>'1',
                'password'=> '$2y$10$dbxS5RRHRMaJUZoS7dqXT.qBMN8lYpKseMcfINpxtlnDiaLHFZt3O',
                'name'=>'Nepal GYM',
                'address'=>'Maitidevi',
                'gymphno'=>'9841522660',
                'email'=>'raman98@gmail.com',
                'ownername'=>'Bhawana Shrestha',
                'username'=>'Cosmos',
                'phno'=>'9841522660',
                'status'=>'1'
            ],
            [
                'admin_id'=>'1',
                'password'=> '$2y$10$dbxS5RRHRMaJUZoS7dqXT.qBMN8lYpKseMcfINpxtlnDiaLHFZt3O',
                'name'=>'DXD GYM',
                'address'=>'Maitidevi',
                'gymphno'=>'9841522666',
                'email'=>'DXD@gmail.com',
                'ownername'=>'ESNEHA Sapkoto',
                'username'=>'ESNEHA',
                'phno'=>'9841522666',
                'status'=>'1'
            ],
            [
                'admin_id'=>'1',
                'password'=> '$2y$10$dbxS5RRHRMaJUZoS7dqXT.qBMN8lYpKseMcfINpxtlnDiaLHFZt3O',
                'name'=>'Anuj GYM',
                'address'=>'Maitidevi',
                'gymphno'=>'9841522661',
                'email'=>'anuj@gmail.com',
                'ownername'=>'anuj paudel',
                'username'=>'masu',
                'phno'=>'9841522662',
                'status'=>'0'
            ],
            [
                'admin_id'=>'1',
                'password'=> '$2y$10$dbxS5RRHRMaJUZoS7dqXT.qBMN8lYpKseMcfINpxtlnDiaLHFZt3O',
                'name'=>'LOLI GYM',
                'address'=>'Maitidevi',
                'gymphno'=>'9841522626',
                'email'=>'loli@gmail.com',
                'ownername'=>'Adit Malakar',
                'username'=>'lolipoli',
                'phno'=>'9841522626',
                'status'=>'0'
            ],
            [
                'admin_id'=>'1',
                'password'=> '$2y$10$dbxS5RRHRMaJUZoS7dqXT.qBMN8lYpKseMcfINpxtlnDiaLHFZt3O',
                'name'=>'oppai GYM',
                'address'=>'Maitidevi',
                'gymphno'=>'9841521660',
                'email'=>'oppai@gmail.com',
                'ownername'=>'Rias Gremory',
                'username'=>'Oppai',
                'phno'=>'9841122660',
                'status'=>'1'
            ]
       
            ]);
    }
}
