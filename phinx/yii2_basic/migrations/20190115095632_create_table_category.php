<?php

use Phinx\Migration\AbstractMigration;

class CreateTableCategory extends AbstractMigration
{

    public function up()
    {
        $this->execute('ALTER DATABASE `yii_db` COLLATE utf8_general_ci');
        $category = $this->table('category', ['id' => true, 'primary_key' => ['id']]);
        $category
            ->addColumn('parent_id', 'integer', ['null' => true])
            ->addColumn('title', 'string', ['limit' => 50])
            ->addColumn('description', 'string', ['limit' => 255])
            ->addForeignKey('parent_id', 'category', 'id', ['delete' => 'CASCADE'])
            ->create();
    }

    public function down()
    {
        $this->table('category')->drop()->save();
    }

}
