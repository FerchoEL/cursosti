<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Fernando Espinosa',
            'email' => 'lufeesle@gmail.com',
            'password' => bcrypt('fercho92')            
        ]);
        User::factory(99)->create();
    }
}
