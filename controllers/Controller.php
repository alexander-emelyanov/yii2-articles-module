<?php

namespace AlexanderEmelyanov\yii\modules\articles\controllers;

use Yii;
use yii\helpers\Url;

/**
 * Class Controller
 * @package AlexanderEmelyanov\yii\modules\articles\controllers
 */

class Controller extends \yii\web\Controller{

    public function getMenuItems(){

        $buttons = [
            'articles' => ['label' => Yii::t('app', 'Articles'), 'url' => Url::to('/articles/articles')],
            'articles-instances' => ['label' => Yii::t('app', 'Articles Instances'), 'url' => Url::to('/articles/articles-instances')],
        ];

        return $buttons;
    }

} 