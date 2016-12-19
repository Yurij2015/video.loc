<?php

use yii\db\Migration;

class m161218_110452_video extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('video', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'path' => $this->string()->notNull(),
            'description' => $this->string()->notNull(),
            'topic_id' => $this->integer()->notNull(),
            'image_id' => $this->integer()->notNull(),
            'created_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_at' => $this->integer(),
            'updated_by' => $this->integer(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('video');
    }
}
