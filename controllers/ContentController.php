<?php

namespace app\controllers;

use Yii;
use app\models\Content;
use app\models\ContentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Type;
use app\models\Category;
use yii\helpers\ArrayHelper;

/**
 * ContentController implements the CRUD actions for Content model.
 */
class ContentController extends AdminController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return ArrayHelper::merge(parent::behaviors(), [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                    'delete-from-site' => ['POST'],
                ],
            ],
        ]);
    }

    /**
     * Lists all Content models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ContentSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Content model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Content model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $category = Category::find()->all();
        $type = Type::find()->all();

        $model = new Content();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'category' => $category,
                'type' => $type,
            ]);
        }
    }

    public function actionCreateFromSite()
    {
        $category = Category::find()->all();
        $type = Type::find()->all();

        $model = new Content();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

          //  return $this->redirect(['view', 'id' => $model->id]);

            $content = Content::find()->where("`id` = '{$model->id}'")->one();
            $url = \app\classes\Url::url(\app\classes\Url::arrayUrl(),$content->category_id,$content->alias);
            return $this->redirect([$url]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'category' => $category,
                'type' => $type,
            ]);
        }
    }

    /**
     * Updates an existing Content model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    public function actionUpdateFromSite($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $content = Content::find()->where("`id` = '{$id}'")->one();
            $url = \app\classes\Url::url(\app\classes\Url::arrayUrl(),$content->category_id,$content->alias);
            return $this->redirect([$url]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Content model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionDeleteFromSite($id)
    {
        $content = Content::find()->where("`id` = '{$id}'")->one();
        $url = \app\classes\Url::url(\app\classes\Url::arrayUrl(),$content->category_id,$content->alias);
        $this->findModel($id)->delete();

     //  echo $url; die;
        return $this->redirect([$url]);
    }

    /**
     * Finds the Content model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Content the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Content::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
