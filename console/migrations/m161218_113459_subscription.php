<?php

use yii\db\Migration;

class m161218_113459_subscription extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('subscription', [
            'user_id' => $this->integer(),
            'section_id' => $this->integer(),
            'PRIMARY KEY (`user_id`, `section_id`)',
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%subscription}}');
    }
}
