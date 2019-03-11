<?php

use Phinx\Seed\AbstractSeed;

class CategorySeeder extends AbstractSeed
{
    public function run()
    {
        $data = [
            [
                'title' => 'name1',
                'description' => 'Coelacanths are a close relative',
            ],
            [
                'title' => 'name2',
                'description' => 'Coelacanths are a close relative',
            ],
            [
                'title' => 'name3',
                'description' => 'Coelacanths are a close relative',
            ],
            [
                'parent_id' => '1',
                'title' => 'name4',
                'description' => 'Coelacanths are a close relative',
            ],
            [
                'parent_id' => '1',
                'title' => 'name5',
                'description' => 'Coelacanths are a close relative',
            ],
            [
                'parent_id' => '1',
                'title' => 'name6',
                'description' => 'Coelacanths are a close relative',
            ],
            [
                'parent_id' => '2',
                'title' => 'name7',
                'description' => 'Coelacanths are a close relative',
            ],
            [
                'parent_id' => '2',
                'title' => 'name8',
                'description' => 'Coelacanths are a close relative',
            ],
            [
                'parent_id' => '2',
                'title' => 'name9',
                'description' => 'Coelacanths are a close relative',
            ],
            [
                'parent_id' => '3',
                'title' => 'name10',
                'description' => 'Coelacanths are a close relative',
            ],
            [
                'parent_id' => '3',
                'title' => 'name11',
                'description' => 'Coelacanths are a close relative',
            ],
            [
                'parent_id' => '3',
                'title' => 'name12',
                'description' => 'Coelacanths are a close relative',
            ],
            [
                'parent_id' => '5',
                'title' => 'name13',
                'description' => 'Coelacanths are a close relative',
            ],
            [
                'parent_id' => '5',
                'title' => 'name14',
                'description' => 'Coelacanths are a close relative',
            ],
            [
                'parent_id' => '5',
                'title' => 'name15',
                'description' => 'Coelacanths are a close relative',
            ],
            [
                'parent_id' => '10',
                'title' => 'name16',
                'description' => 'Coelacanths are a close relative',
            ],
            [
                'parent_id' => '16',
                'title' => 'name17',
                'description' => 'Coelacanths are a close relative',
            ],
        ];
        $user = $this->table('category');
        $user->insert($data)->save();
    }
}
