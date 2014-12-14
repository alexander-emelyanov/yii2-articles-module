<?php

namespace AlexanderEmelyanov\yii\modules\articles\models;

use Yii;

/**
 * This is the model class for table "article".
 *
 * Class Article
 * @package AlexanderEmelyanov\yii\modules\articles\models
 * @author Alexander Emelyanov
 * @date 14dec2014
 * @place Moscow, Russia
 *
 * @property integer $article_id
 * @property string $url_key
 *
 * @property ArticleInstance[] $articleInstances
 */

class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['url_key'], 'string', 'max' => 256]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'article_id' => Yii::t('app', 'Article ID'),
            'url_key' => Yii::t('app', 'Url Key'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticleInstances()
    {
        return $this->hasMany(ArticleInstance::className(), ['article_id' => 'article_id']);
    }
}