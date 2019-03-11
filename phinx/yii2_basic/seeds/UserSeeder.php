<?php

use Phinx\Seed\AbstractSeed;

class UserSeeder extends AbstractSeed
{
    public function run()
    {
        $data = [
            [
                'name' => 'ivan',
                'email' => 'waw@gmail.com',
                'password' => '00862610',
                'status' => 1
            ],
            [
                'name' => 'ivan2',
                'email' => 'pade@gmail.com',
                'password' => '1111',
                'status' => 1
            ],
            [
                'name' => 'ivan3',
                'email' => 'ivan@test.ru',
                'password' => 'jlS56nH',
                'status' => 1
            ],
            [
                'name' => 'ivan(admin)',
                'email' => 'ivanwww@test.ru',
                'password' => 'jlS56nH',
                'status' => 2
            ],
            [
                'name' => 'ivan4',
                'email' => 'ivan4@test.ru',
                'password' => 'jlS56nH',
                'status' => 1
            ]

        ];
        $user = $this->table('user');
        $user->insert($data)->save();
    }
}
