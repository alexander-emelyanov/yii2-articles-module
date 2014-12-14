<?php

namespace AlexanderEmelyanov\yii\modules\articles\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "article_instance".
 *
 * Class ArticleInstance
 * @package AlexanderEmelyanov\yii\modules\articles\models
 * @author Alexander Emelyanov
 * @date 14dec2014
 * @place Moscow, Russia
 *
 * @property integer $article_id
 * @property integer $author_id
 * @property string $language
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $published
 * @property integer $hits_count
 * @property string $intro_text
 * @property string $full_text
 * @property string $title
 * @property string $meta_keywords
 * @property string $meta_description
 *
 * @property Article $article
 */

class ArticleInstance extends \yii\db\ActiveRecord
{

    CONST PUBLISHED_YES = 'Yes';
    CONST PUBLISHED_NO = 'No';

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article_instance';
    }

    /**
     * @inheritdoc
     */
    public function behaviors(){
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['article_id', 'author_id', 'language', 'intro_text', 'full_text', 'title', 'meta_keywords', 'meta_description'], 'required'],
            [['article_id', 'author_id', 'hits_count'], 'integer'],
            [['published', 'intro_text', 'full_text', 'title', 'meta_keywords', 'meta_description'], 'string'],
            [['language'], 'string', 'max' => 16]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'article_id' => Yii::t('app', 'Article ID'),
            'author_id' => Yii::t('app', 'Author ID'),
            'language' => Yii::t('app', 'Language'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'published' => Yii::t('app', 'Published'),
            'hits_count' => Yii::t('app', 'Hits Count'),
            'intro_text' => Yii::t('app', 'Intro Text'),
            'full_text' => Yii::t('app', 'Full Text'),
            'title' => Yii::t('app', 'Title'),
            'meta_keywords' => Yii::t('app', 'Meta Keywords'),
            'meta_description' => Yii::t('app', 'Meta Description'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticle()
    {
        return $this->hasOne(Article::className(), ['article_id' => 'article_id']);
    }

    public function scopePublished($query)
    {
        $query->andWhere(['published' => 'Yes']);
        return $this;
    }
}