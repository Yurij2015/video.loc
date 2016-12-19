<?php

use yii\db\Migration;

class m161218_113459_subcription extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%subscription}}', [
            'user_id' => $this->integer(true),
            'section_id' => $this->integer(true),
            'PRIMARY KEY (`user_id`, `section_id`)',
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%subscription}}');
    }
}
