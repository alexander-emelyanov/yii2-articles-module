<?php

use yii\db\Schema;

/**
 * Class m141214_163600_create_articles_tables
 */

class m141214_163600_create_articles_tables extends \yii\db\Migration{

    /**
     * @return bool|void
     * @throws \yii\base\InvalidConfigException
     */
    public function safeUp(){

        $tableOptions = null;
        if ($this->db->driverName == 'mysql'){
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $articleTable = '{{%article}}';
        $articleInstanceTable = '{{%article_instance}}';

        $this->createTable($articleTable, [
            'article_id' => Schema::TYPE_PK,
            'url_key' => 'VARCHAR(256) NOT NULL DEFAULT \'\'',
        ], $tableOptions);

        $this->createTable($articleInstanceTable, [
            'article_id' => Schema::TYPE_INTEGER . ' not null default 0',
            'author_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'language' => 'varchar(16) not null default ""',
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'published' => 'ENUM(\'Yes\', \'No\') NOT NULL DEFAULT \'No\'',
            'hits_count' => Schema::TYPE_BIGINT . ' NOT NULL DEFAULT 0',
            'intro_text' => Schema::TYPE_TEXT . ' NOT NULL DEFAULT \'\'',
            'full_text' => Schema::TYPE_TEXT . ' NOT NULL DEFAULT \'\'',
            'title' => Schema::TYPE_TEXT . ' NOT NULL DEFAULT \'\'',
            'meta_keywords' => Schema::TYPE_TEXT . ' NOT NULL DEFAULT \'\'',
            'meta_description' => Schema::TYPE_TEXT . ' NOT NULL DEFAULT \'\'',
        ], $tableOptions);

        $this->addPrimaryKey('article_instance_id', $articleInstanceTable, ['article_id', 'language']);

        $this->addForeignKey('fk_article_instance_article', $articleInstanceTable, 'article_id', $articleTable, 'article_id', 'cascade');
    }

    public function safeDown(){
        $this->dropTable('{{%article_instance}}');
        $this->dropTable('{{%article}}');
        return true;
    }
}
