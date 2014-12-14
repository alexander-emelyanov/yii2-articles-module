<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model AlexanderEmelyanov\yii\modules\articles\models\ArticleInstance */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Article Instances'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-instance-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'article_id' => $model->article_id, 'language' => $model->language], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'article_id' => $model->article_id, 'language' => $model->language], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'article_id',
            'author_id',
            'language',
            'created_at',
            'updated_at',
            'published',
            'hits_count',
            'intro_text:ntext',
            'full_text:ntext',
            'title:ntext',
            'meta_keywords:ntext',
            'meta_description:ntext',
        ],
    ]) ?>

</div>