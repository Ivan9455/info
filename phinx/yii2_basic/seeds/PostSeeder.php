<?php

use Phinx\Seed\AbstractSeed;

class PostSeeder extends AbstractSeed
{
    public function run()
    {
        $data = [
            [
                'user_id' => '1',
                'category_id' => '1',
                'image' => '1.jpg',
                'title' => 'ssssssssssssss',
                'content' => '1@gmail.comssssssssssssssssssss',
                'time_read' => '1 min',
                'updated_at' => '2019-01-14 15:50:23',
                'created_at' => '2019-01-14 15:00:23',
                'status_check' => '1'
            ],
            [
                'user_id' => '2',
                'category_id' => '2',
                'image' => '2.jpg',
                'title' => 'ssssssssssssss',
                'content' => '1@gmail.comssssssssssssssssssss',
                'time_read' => '1 min',
                'updated_at' => '2019-01-14 15:50:22',
                'created_at' => '2019-01-14 15:05:23',
                'status_check' => '1'
            ],
            [
                'user_id' => '3',
                'category_id' => '3',
                'image' => '2.jpg',
                'title' => 'pliz delet mi!(zzzz',
                'content' => 'ssssssssssssssssssss',
                'time_read' => '1 min',
                'updated_at' => '2019-01-14 15:50:21',
                'created_at' => '2019-01-14 15:10:23',
                'status_check' => '1'
            ],
            [
                'user_id' => '1',
                'category_id' => '3',
                'image' => '2.jpg',
                'title' => 'pliz delet mi!(ssss',
                'content' => 'ssssssssssssssssssss',
                'time_read' => '1 min',
                'updated_at' => '2019-01-14 15:50:21',
                'created_at' => '2019-01-14 15:10:23',
                'status_check' => '1'
            ],
            [
                'user_id' => '1',
                'category_id' => '3',
                'image' => '2.jpg',
                'title' => 'pliz delet mi!(aaaa',
                'content' => 'ssssssssssssssssssss',
                'time_read' => '1 min',
                'updated_at' => '2019-01-14 15:50:21',
                'created_at' => '2019-01-14 15:10:23',
                'status_check' => '1'
            ]
        ];
        $user = $this->table('post');
        $user->insert($data)->save();
    }
}
