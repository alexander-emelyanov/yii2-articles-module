<?php

namespace AlexanderEmelyanov\yii\modules\articles\controllers;

use yii\helpers\Url;
use yii\web\Controller;

/**
 * Class DefaultController
 * @package AlexanderEmelyanov\yii\modules\articles\controllers
 * @author Alexander Emelyanov
 * @date 15dec2014
 * @place Moscow, Russia
 */

class DefaultController extends Controller{

    public function actionIndex()
    {
        return $this->redirect(Url::to('articles/articles'));
    }
}
