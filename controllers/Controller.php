<?php

namespace AlexanderEmelyanov\yii\modules\articles\controllers;

use Yii;
use yii\helpers\Url;

/**
 * Class Controller
 * @package AlexanderEmelyanov\yii\modules\articles\controllers
 */

class Controller extends \yii\web\Controller{

    public $activeMenuItem = null;

    public function getMenuItems(){

        $buttons = [
            'articles' => ['label' => Yii::t('app', 'Articles'), 'url' => Url::to('/articles/articles')],
            'articles-instances' => ['label' => Yii::t('app', 'Articles Instances'), 'url' => Url::to('/articles/articles-instances')],

//            ['label' => 'Home', 'url' => ['site/index']],
//            ['label' => 'Products', 'url' => ['product/index'], 'items' => [
//              ['label' => 'New Arrivals', 'url' => ['product/index', 'tag' => 'new']],
//              ['label' => 'Most Popular', 'url' => ['product/index', 'tag' => 'popular']],
//            ]],
//            ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
        ];

        return $buttons;
    }

} 