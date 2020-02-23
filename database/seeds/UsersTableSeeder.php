<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 100; $i++) {
            User::create([
                'name' => 'name ' . $i,
                'email' => 'email' .$i . '@gmail.com',
                'password' => 'password',
            ]);
        }
    }
}
