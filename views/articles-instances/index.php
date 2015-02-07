<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Articles Instances');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-instance-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
            'modelClass' => 'Article Instance',
        ]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'article_id',
            'author_id',
            'language',
            'created_at',
            'updated_at',
            // 'published',
            // 'hits_count',
            // 'intro_text:ntext',
            // 'full_text:ntext',
            // 'title:ntext',
            // 'meta_keywords:ntext',
            // 'meta_description:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>