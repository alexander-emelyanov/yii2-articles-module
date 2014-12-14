<?php

namespace AlexanderEmelyanov\yii\modules\articles\widgets;

/**
 * Class ArticlesListItem
 * @package AlexanderEmelyanov\yii\modules\articles\widgets
 * @author Alexander Emelyanov
 * @date 15dec2014
 * @place Moscow, Russia
 */

class ArticlesListItem extends \yii\base\Widget{

    /**
     * @var \AlexanderEmelyanov\yii\modules\articles\models\ArticleInstance $model
     */
    public $model = null;

    public function run(){

        return $this->render('articles_list_item', [
            'model' => $this->model,
        ]);

    }

}