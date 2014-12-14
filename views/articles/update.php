<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model AlexanderEmelyanov\yii\modules\articles\models\Article */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
        'modelClass' => 'Article',
    ]) . ' ' . $model->article_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Articles'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->article_id, 'url' => ['view', 'id' => $model->article_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="article-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>