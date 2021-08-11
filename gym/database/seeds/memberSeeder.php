<?php

use Illuminate\Database\Seeder;

class memberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\member::class)->create();

        DB::table('members')->insert(
            [
            'gym_id'=>'1',
            'email'=>'grayfia@gmail.com',
            'password'=>'$2y$10$dbxS5RRHRMaJUZoS7dqXT.qBMN8lYpKseMcfINpxtlnDiaLHFZt3O',
            'name'=>'grayfia lucifuge',
            'phno'=>'9860479655',
            'gender'=>'female',
            'age'=>'22',
            'username'=>'Sliver Haired Princess',
            'status'=>'1',
            ],
            [
                'gym_id'=>'1',
                'email'=>'grayfia1@gmail.com',
                'password'=>'$2y$10$dbxS5RRHRMaJUZoS7dqXT.qBMN8lYpKseMcfINpxtlnDiaLHFZt3O',
                'name'=>'grayfia lucifuge',
                'phno'=>'9860479615',
                'gender'=>'female',
                'age'=>'21',
                'username'=>'Sliver Princess',
                'status'=>'1',
            ],
            [
                'gym_id'=>'1',
                'email'=>'rias@gmail.com',
                'password'=>'$2y$10$dbxS5RRHRMaJUZoS7dqXT.qBMN8lYpKseMcfINpxtlnDiaLHFZt3O',
                'name'=>'rias Gremory',
                'phno'=>'9860479613',
                'gender'=>'female',
                'age'=>'21',
                'username'=>'ruin Princess',
                'status'=>'1',
            ],
            [
                'gym_id'=>'1',
                'email'=>'Akeno@gmail.com',
                'password'=>'$2y$10$dbxS5RRHRMaJUZoS7dqXT.qBMN8lYpKseMcfINpxtlnDiaLHFZt3O',
                'name'=>'Himejima Akeno',
                'phno'=>'9860479635',
                'gender'=>'female',
                'age'=>'21',
                'username'=>'Priestess of lighting',
                'status'=>'1',
            ],
            [
                'gym_id'=>'1',
                'email'=>'kiba@gmail.com',
                'password'=>'$2y$10$dbxS5RRHRMaJUZoS7dqXT.qBMN8lYpKseMcfINpxtlnDiaLHFZt3O',
                'name'=>'kiba yuuto',
                'phno'=>'9860479678',
                'gender'=>'male',
                'age'=>'21',
                'username'=>'holy demonic knight',
                'status'=>'1',
            ]

); 
    }
}
