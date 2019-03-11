<?php


use Phinx\Migration\AbstractMigration;

class CreateTableBookmark extends AbstractMigration
{
    public function up()
    {
        $ratings = $this->table('bookmark', ['id' => true, 'primary_key' => ['id']]);
        $ratings
            ->addColumn('user_id', 'integer')
            ->addColumn('post_id', 'integer')
            ->addForeignKey('user_id', 'user', 'id',['delete'=>'CASCADE'])
            ->addForeignKey('post_id', 'post', 'id',['delete'=>'CASCADE'])
            ->create();
    }

    public function down()
    {
        $this->table('bookmark')->drop()->save();
    }
}
