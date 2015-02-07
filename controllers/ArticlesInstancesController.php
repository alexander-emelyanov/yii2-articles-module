<?php

namespace AlexanderEmelyanov\yii\modules\articles\controllers;

use Yii;
use AlexanderEmelyanov\yii\modules\articles\models\ArticleInstance;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ArticlesInstancesController implements the CRUD actions for ArticleInstance model.
 */
class ArticlesInstancesController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all ArticleInstance models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => ArticleInstance::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ArticleInstance model.
     * @param integer $article_id
     * @param string $language
     * @return mixed
     */
    public function actionView($article_id, $language)
    {
        return $this->render('view', [
            'model' => $this->findModel($article_id, $language),
        ]);
    }

    /**
     * Creates a new ArticleInstance model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ArticleInstance();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'article_id' => $model->article_id, 'language' => $model->language]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ArticleInstance model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $article_id
     * @param string $language
     * @return mixed
     */
    public function actionUpdate($article_id, $language)
    {
        $model = $this->findModel($article_id, $language);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'article_id' => $model->article_id, 'language' => $model->language]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ArticleInstance model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $article_id
     * @param string $language
     * @return mixed
     */
    public function actionDelete($article_id, $language)
    {
        $this->findModel($article_id, $language)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ArticleInstance model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $article_id
     * @param string $language
     * @return ArticleInstance the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($article_id, $language)
    {
        if (($model = ArticleInstance::findOne(['article_id' => $article_id, 'language' => $language])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}