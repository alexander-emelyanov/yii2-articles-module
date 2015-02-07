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

    public $layout = 'main';

    public $controllerNamespace = 'AlexanderEmelyanov\yii\modules\articles\controllers';

    public function init(){
        parent::init();
        if (!in_array('layoutsPath', Yii::$aliases)){
            Yii::setAlias('layoutsPath', Yii::$app->layoutPath);
        }
        Yii::$app->setHomeUrl('/' . $this->getUniqueId());
    }
}
