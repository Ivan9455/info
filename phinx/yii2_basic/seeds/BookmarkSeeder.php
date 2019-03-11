<?php

use Phinx\Seed\AbstractSeed;

class BookmarkSeeder extends AbstractSeed
{
    public function run()
    {
        $data = [
            [
                'user_id' => '1',
                'post_id' => '2',
            ],
            [
                'user_id' => '1',
                'post_id' => '3',
            ],
            [
                'user_id' => '2',
                'post_id' => '2',
            ],
            [
                'user_id' => '3',
                'post_id' => '3',
            ]
        ];
        $user = $this->table('bookmark');
        $user->insert($data)->save();
    }
}
