<?php

use Phinx\Seed\AbstractSeed;

class RatingSeeder extends AbstractSeed
{
    public function run()
    {
        $data = [
            [
                'user_id' => 1,
                'post_id' => 2,
                'status' => '1'
            ],
            [
                'user_id' => 2,
                'post_id' => 2,
                'status' => '1'
            ],
            [
                'user_id' => 3,
                'post_id' => 2,
                'status' => '1'
            ],
            [
                'user_id' => 1,
                'post_id' => 1,
                'status' => '2'
            ],
            [
                'user_id' => 2,
                'post_id' => 1,
                'status' => '1'
            ],
            [
                'user_id' => 1,
                'post_id' => 3,
                'status' => '1'
            ]
        ];
        $user = $this->table('rating');
        $user->insert($data)->save();
    }
}
