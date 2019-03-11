<?php

use Phinx\Migration\AbstractMigration;

class CreateTablePost extends AbstractMigration
{
    public function up()
    {
        $post = $this->table('post', ['id' => true, 'primary_key' => ['id']]);
        $post
            ->addColumn('user_id', 'integer')
            ->addColumn('category_id', 'integer')
            ->addColumn('image', 'string')
            ->addColumn('title', 'string')
            ->addColumn('content', 'text')
            ->addColumn('time_read', 'string')
            ->addColumn('updated_at', 'timestamp',
                ['default' => 'CURRENT_TIMESTAMP', 'update' => 'CURRENT_TIMESTAMP'])
            ->addColumn('created_at', 'datetime',
                ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('time_checked', 'datetime', ['null' => true])
            ->addColumn('status_check', 'enum',
                ['null' => false, 'default' => 1, 'values' => [1, 2, 3]])
            ->addForeignKey('user_id', 'user', 'id', ['delete' => 'CASCADE'])
            ->addForeignKey('category_id', 'category', 'id', ['delete' => 'CASCADE'])
            ->create();
    }

    public function down()
    {
        $this->table('post')->drop()->save();
    }
}
