<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model AlexanderEmelyanov\yii\modules\articles\models\ArticleInstance */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
        'modelClass' => 'Article Instance',
    ]) . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Article Instances'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'article_id' => $model->article_id, 'language' => $model->language]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="article-instance-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>