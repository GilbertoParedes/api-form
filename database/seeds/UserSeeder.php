<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Gilberto',
                'last_name' => 'Paredes',
                'email' => 'gilbertowallsz06@gmail.com',
                'password' => bcrypt('secret')
            ],
            [
                'name' => 'Fernando',
                'last_name' => 'Uribe',
                'email' => 'furibe@gmail.com',
                'password' => bcrypt('secret')
            ]
        ];

        User::insert($users);
    }
}
