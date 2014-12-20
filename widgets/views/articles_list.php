<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/**
 * @author Alexander Emelyanov
 * @date 21dec2014
 * @place Moscow, Russia
 *
 * @var $this yii\web\View
 * @var $dataProvider yii\data\ActiveDataProvider
 */

$this->title = Yii::t('app/nav', 'Articles');
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="article-instance-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <?= ListView::widget([
        'summary' => '',
        'emptyText' => '',
        'separator' => '<hr>',
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model) {
            return AlexanderEmelyanov\yii\modules\articles\widgets\ArticlesListItem::widget(['model' => $model]);
        },
    ]) ?>
</div>