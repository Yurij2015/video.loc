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
        $this->addForeignKey('fk_video_topic_idx', '{{%video}}', 'topic_id', '{{%topic}}', 'id');

        //subcription-user
        $this->createIndex('fx_subscription_user_idx', '{{%subscription}}', 'user_id');
        $this->addForeignKey('fx_subscription_user_idx', '{{%subscription}}', 'user_id', '{{%user}}', 'id');

        //user-like
        $this->createIndex('fk_like_user_idx', '{{%like}}', 'user_id');
        $this->addForeignKey('fk_like_user_idx', '{{%like}}', 'user_id', '{{%user}}', 'id');

        //video-like
        $this->createIndex('fk_like_video_idx', '{{%like}}', 'user_id');
        $this->addForeignKey('fk_like_video_idx', '{{%like}}', 'user_id', '{{%video}}', 'id');

        //image-video
        $this->createIndex('fk_video_image_idx', '{{%video}}', 'image_id');
        $this->addForeignKey('fk_video_image_idx', '{{%video}}', 'image_id', '{{%image}}', 'id');

        //image-section
        $this->createIndex('fk_section_image_idx', '{{%section}}', 'image_id');
        $this->addForeignKey('fk_section_image_idx', '{{%section}}', 'image_id', '{{%image}}', 'id');

        //subcription-section
        $this->createIndex('fx_subscription_section_idx', '{{%subscription}}', 'user_id');
        $this->addForeignKey('fx_subscription_section_idx', '{{%subscription}}', 'user_id', '{{%section}}', 'id');



    }

    public function down()
    {
        $this->dropForeignKey('fk_topic_section_idx', '{{%topic}}');
        $this->dropIndex('fk_topic_section_idx', '{{%topic}}');
        $this->dropForeignKey('fk_video_topic_idx', '{{%video}}');
        $this->dropIndex('fk_video_topic_idx', '{{%video}}');
        $this->dropForeignKey('fx_subscription_user_idx', '{{%subscription}}');
        $this->dropIndex('fx_subscription_user_idx', '{{%subscription}}');
        $this->dropForeignKey('fk_like_user_idx', '{{%like}}');
        $this->dropIndex('fk_like_user_idx', '{{%like}}');
        $this->dropForeignKey('fk_like_video_idx', '{{%like}}');
        $this->dropIndex('fk_like_video_idx', '{{%like}}');
        $this->dropForeignKey('fk_video_image_idx', '{{%video}}');
        $this->dropIndex('fk_video_image_idx', '{{%video}}');
        $this->dropForeignKey('fk_section_image_idx', '{{%section}}');
        $this->dropIndex('fk_section_image_idx', '{{%section}}');
        $this->dropForeignKey('fx_subscription_section_idx', '{{%subscription}}');
        $this->dropIndex('fx_subscription_section_idx', '{{%subscription}}');
    }

}
