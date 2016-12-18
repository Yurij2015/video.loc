<?php

use yii\db\Migration;

class m161218_110452_video extends Migration
{
    public function up()
    {

    }

    public function down()
    {
        $this->dropTable('video');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
