<?php

use yii\helpers\Url;

/**
 * @author Alexander Emelyanov
 * @date 14dec2014
 * @place Moscow, Russia
 *
 * @var \AlexanderEmelyanov\yii\modules\articles\models\ArticleInstance $model
 */

?>
<div class="blog-post-list row">
    <div class="col-md-4">
        <img class="img-responsive img-rounded" src="/img/articles/<?= $model->article->url_key ?>/small.jpg">
    </div>
    <div class="col-md-8">
        <h2><a href="<?= Url::to(['articles/view', 'code' => $model->article->url_key]) ?>"><?= $model->title ?></a></h2>
        <ul class="list-inline list-unstlyed post-info">
<!--            <li><i class="fa fa-user"></i>by <a href="">Jonathan Q.</a></li>-->
            <li><i class="fa fa-clock-o"></i> <time datetime="<?= date('Y-m-d', $model->created_at) . 'T' . date('H:i:s', $model->created_at) ?>"><?= Yii::$app->formatter->asDate($model->created_at, 'long') ?></time></li>
            <li><i class="fa fa-comment-o"></i> <a href="#">0 Comments</a></li>
        </ul>
        <?= $model->intro_text ?>
    </div>
</div>