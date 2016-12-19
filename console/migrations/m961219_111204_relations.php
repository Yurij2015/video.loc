<?php

use yii\db\Migration;

class m961219_111204_relations extends Migration
{
    public function up()
    {
        //topic-section
        $this->createIndex('fk_topic_section_idx', '{{%topic}}', 'section_id');
        $this->addForeignKey('fk_topic_section_idx', '{{%topic}}', 'section_id', '{{%section}}', 'id');
        //video-topic
        $this->createIndex('fk_video_topic_idx', '{{%video}}', 'topic_id');

        //subcription-user
        $this->createIndex('fx_subscription_user_idx', '{{%ubscription}}', 'user_id');
        $this->addForeignKey('fx_subscription_user_idx', '{{%ubscription}}', 'user_id', '{{%user}}', 'id');


    }

    public function down()
    {


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
