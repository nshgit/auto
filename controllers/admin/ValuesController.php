<?php

namespace app\controllers\admin;

use Yii;
use app\models\Value;
use app\models\admin\search\ValuesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ValuesController implements the CRUD actions for Value model.
 */
class ValuesController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Value models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ValuesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Value model.
     * @param integer $auto_id
     * @param integer $attribute_id
     * @return mixed
     */
    public function actionView($auto_id, $attribute_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($auto_id, $attribute_id),
        ]);
    }

    /**
     * Creates a new Value model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Value();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['admin/autos/view', 'id' => $model->auto_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Value model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $auto_id
     * @param integer $attribute_id
     * @return mixed
     */
    public function actionUpdate($auto_id, $attribute_id)
    {
        $model = $this->findModel($auto_id, $attribute_id);
        

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['admin/autos/view', 'id' => $model->auto_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }print_r($model);
    }

    /**
     * Deletes an existing Value model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $auto_id
     * @param integer $attribute_id
     * @return mixed
     */
    public function actionDelete($auto_id, $attribute_id)
    {
        $this->findModel($auto_id, $attribute_id)->delete();

        return $this->redirect(['admin/autos/view', 'id' => $model->auto_id]);
    }

    /**
     * Finds the Value model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $auto_id
     * @param integer $attribute_id
     * @return Value the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($auto_id, $attribute_id)
    {
        if (($model = Value::findOne(['auto_id' => $auto_id, 'attribute_id' => $attribute_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
