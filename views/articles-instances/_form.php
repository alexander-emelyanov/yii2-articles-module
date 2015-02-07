<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use AlexanderEmelyanov\yii\modules\articles\models\Article;

/* @var $this yii\web\View */
/* @var $model AlexanderEmelyanov\yii\modules\articles\models\ArticleInstance */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article-instance-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'article_id')->dropDownList(ArrayHelper::map(Article::find()->all(), 'article_id', 'url_key')) ?>

    <?= $form->field($model, 'author_id')->textInput() ?>

    <?= $form->field($model, 'language')->textInput(['maxlength' => 16]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'published')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'hits_count')->textInput() ?>

    <?= $form->field($model, 'intro_text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'full_text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'title')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'meta_keywords')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'meta_description')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>