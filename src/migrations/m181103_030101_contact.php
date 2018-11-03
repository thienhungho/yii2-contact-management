<?php

namespace thienhungho\ContactManagement\migrations;

use yii\db\Schema;

class m181103_030101_contact extends \yii\db\Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%contact}}', [
            'id'                    => $this->primaryKey(),
            'subject'               => $this->string(255)->notNull(),
            'author_email'          => $this->string(255)->notNull(),
            'author_name'           => $this->string(255)->notNull(),
            'author_phone'          => $this->string(255),
            'author_birth_date'     => $this->date(),
            'author_stress_address' => $this->string(255),
            'author_city'           => $this->string(255),
            'author_zip_code'       => $this->string(255),
            'content'               => $this->text()->notNull(),
            'status'                => $this->string(255),
            'created_at'            => $this->timestamp()->notNull()->defaultValue(CURRENT_TIMESTAMP),
            'updated_at'            => $this->timestamp()->notNull()->defaultValue('0000-00-00 00:00:00'),
            'created_by'            => $this->integer(19),
            'updated_by'            => $this->integer(19),
        ], $tableOptions);

    }

    public function safeDown()
    {
        $this->dropTable('{{%contact}}');
    }
}
