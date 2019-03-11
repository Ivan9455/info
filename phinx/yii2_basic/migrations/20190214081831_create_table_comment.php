<?php

use Phinx\Migration\AbstractMigration;

class CreateTableComment extends AbstractMigration
{
    public function up()
    {
        $user = $this->table('comment', ['id' => true, 'primary_key' => ['id']]);
        $user
            ->addColumn('user_id', 'integer')
            ->addColumn('post_id', 'integer')
            ->addColumn('content', 'string')
            ->addColumn('updated_at', 'timestamp',
                ['default' => 'CURRENT_TIMESTAMP', 'update' => 'CURRENT_TIMESTAMP'])
            ->addColumn('created_at', 'datetime',
                ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('time_checked', 'datetime',
                ['null' => true])
            ->addColumn('status_check', 'enum',
                ['null' => false, 'default' => 1, 'values' => [1, 2, 3]])//1 = не проверен 2 одобрен 3 бан
            ->addForeignKey('user_id', 'user', 'id', ['delete' => 'CASCADE'])
            ->addForeignKey('post_id', 'post', 'id', ['delete' => 'CASCADE'])
            ->create();
    }

    public function down()
    {
        $this->table('comment')->drop()->save();
    }
}
