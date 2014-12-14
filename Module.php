<?php

namespace AlexanderEmelyanov\yii\modules\articles;

use \Yii;

/**
 * Class Module
 * @package AlexanderEmelyanov\yii\modules\articles
 * @author Alexander Emelyanov
 * @date 15dec2014
 * @place Moscow, Russia
 */

class Module extends \yii\base\Module{

    public $controllerNamespace = 'AlexanderEmelyanov\yii\modules\articles\controllers';

    public function init(){
        parent::init();
        Yii::$app->setHomeUrl('/' . $this->getUniqueId());
    }
}
