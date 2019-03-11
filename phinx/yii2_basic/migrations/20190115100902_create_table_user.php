<?php

use Phinx\Migration\AbstractMigration;

class CreateTableUser extends AbstractMigration
{
    public function up()
    {
        $user = $this->table('user', ['id' => true, 'primary_key' => ['id']]);
        $user
            ->addColumn('name', 'string', ['limit' => 32])
            ->addColumn('email', 'string', ['limit' => 64])
            ->addColumn('password', 'string')
            ->addColumn('status', "enum",
                ['null' => false, 'default' => '1', 'values' => [1, 2]])//1 = пользователь , 2 = админ
            ->addIndex(['name', 'email'], ['unique' => true])
            ->create();
    }

    public function down()
    {
        $this->table('user')->drop()->save();
    }
}
