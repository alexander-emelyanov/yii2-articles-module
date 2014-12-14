<?php

namespace AlexanderEmelyanov\yii\modules\articles\widgets;

/**
 * Class Article
 * @package AlexanderEmelyanov\yii\modules\articles\widgets
 * @author Alexander Emelyanov
 * @date 15dec2014
 * @place Moscow, Russia
 */

class Article extends \yii\base\Widget{

    /**
     * @var \AlexanderEmelyanov\yii\modules\articles\models\Article $model
     */
    public $article = null;

    /**
     * @var \AlexanderEmelyanov\yii\modules\articles\models\ArticleInstance $model
     */
    public $articleInstance = null;

    public function run(){

        return $this->render('article', [
            'article' => $this->article,
            'articleInstance' => $this->articleInstance,
        ]);

    }

}