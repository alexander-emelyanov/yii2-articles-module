<?php
/**
 * Main layout for module
 * @author Alexander Emelyanov
 * @date 07feb2015
 * @place Moscow, Russia
 *
 * @var \yii\web\View $this
 * @var string $content
 * @var \AlexanderEmelyanov\yii\modules\articles\controllers\Controller $controller
 */

$controller = Yii::$app->controller;

?>
<?php $this->beginContent('@layoutsPath/main.php'); ?>

    <div class="row">
        <div class="col-md-2 col-xs-12">
            <!--Module menu-->
            <?php echo \yii\widgets\Menu::widget(['items' => $controller->getMenuItems()]) ?>
            <!--/Module menu-->
        </div>
        <div class="col-md-10 col-xs-12">
            <?php echo $content ?>
        </div>
    </div>
<?php $this->endContent() ?>