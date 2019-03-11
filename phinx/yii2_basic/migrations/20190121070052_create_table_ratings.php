<?php

use Phinx\Migration\AbstractMigration;

class CreateTableRatings extends AbstractMigration
{

    public function up()
    {
        $ratings = $this->table('rating', ['id' => true, 'primary_key' => ['id']]);
        $ratings
            ->addColumn('user_id', 'integer')
            ->addColumn('post_id', 'integer')
            ->addColumn('status', 'enum', ['null' => false, 'values' => [1, 2]])
            ->addForeignKey('user_id', 'user', 'id',['delete'=>'CASCADE'])
            ->addForeignKey('post_id', 'post', 'id',['delete'=>'CASCADE'])
            ->create();
    }

    public function down()
    {
        $this->table('rating')->drop()->save();
    }
}
