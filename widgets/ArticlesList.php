<?php

namespace AlexanderEmelyanov\yii\modules\articles\widgets;

use Yii;
use yii\data\ActiveDataProvider;
use AlexanderEmelyanov\yii\modules\articles\models\ArticleInstance;

/**
 * Class ArticlesList
 * @package AlexanderEmelyanov\yii\modules\articles\widgets
 * @author Alexander Emelyanov
 * @date 21dec2014
 * @place Moscow, Russia
 */

class ArticlesList extends \yii\base\Widget{

    /**
     * @return string
     */
    public function run(){

        $dataProvider = new ActiveDataProvider([
            'query' => ArticleInstance::find()->where(['language' => Yii::$app->language, 'published' => ArticleInstance::PUBLISHED_YES])->with('article')->orderBy('article_id DESC'),
        ]);

        return $this->render('articles_list', [
            'dataProvider' => $dataProvider,
        ]);
    }

}