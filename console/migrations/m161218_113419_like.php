<?php

use yii\db\Migration;

class m161218_113419_like extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('like', [
            'user_id' => $this->integer(),
            'video_id' => $this->integer(),
            'PRIMARY KEY (`user_id`, `video_id`)',
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('like');
    }

}
