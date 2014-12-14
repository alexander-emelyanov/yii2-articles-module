<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model AlexanderEmelyanov\yii\modules\articles\models\ArticleInstance */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Article Instance',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Article Instances'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-instance-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>