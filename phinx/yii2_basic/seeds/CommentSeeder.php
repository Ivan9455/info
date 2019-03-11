<?php

use Phinx\Seed\AbstractSeed;

class CommentSeeder extends AbstractSeed
{
    public function run()
    {
        $data = [
            [
                'user_id' => '1',
                'post_id' => '1',
                'content' => 'textcontent',
                'updated_at' => '2019-01-14 15:50:23',
                'created_at' => '2019-01-14 15:00:24',
                'status_check' => '1'
            ],
            [
                'user_id' => '1',
                'post_id' => '2',
                'content' => 'textcontent',
                'updated_at' => '2019-01-14 15:50:23',
                'created_at' => '2019-01-14 15:00:24',
                'status_check' => '1'
            ],
            [
                'user_id' => '1',
                'post_id' => '3',
                'content' => 'textcontent',
                'updated_at' => '2019-01-14 15:50:23',
                'created_at' => '2019-01-14 15:00:24',
                'status_check' => '1'
            ],
            [
                'user_id' => '1',
                'post_id' => '3',
                'content' => 'textcontent',
                'updated_at' => '2019-01-14 15:50:23',
                'created_at' => '2019-01-14 15:00:24',
                'status_check' => '1'
            ],
            [
                'user_id' => '2',
                'post_id' => '1',
                'content' => 'textcontent',
                'updated_at' => '2019-01-14 15:50:23',
                'created_at' => '2019-01-14 15:00:24',
                'status_check' => '1'
            ],
            [
                'user_id' => '2',
                'post_id' => '3',
                'content' => 'textcontent',
                'updated_at' => '2019-01-14 15:50:23',
                'created_at' => '2019-01-14 15:00:24',
                'status_check' => '1'
            ],
            [
                'user_id' => '3',
                'post_id' => '1',
                'content' => 'asdassssssssssssd',
                'updated_at' => '2019-01-14 15:50:23',
                'created_at' => '2019-01-14 15:00:24',
                'status_check' => '1'
            ],
        ];
        $user = $this->table('comment');
        $user->insert($data)->save();
    }
}
