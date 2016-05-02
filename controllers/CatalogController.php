<?php
namespace app\controllers;

use app\models\Auto;
use yii\data\ActiveDataProvider;
use Yii;
use app\models\admin\search\AutosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class CatalogController extends Controller
{
    public function actionIndex()
    {
        $searchModel = new AutosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    
    public function actionCategory($id)
    {
        $category = $this->findCategoryModel($id);

        $dataProvider = new ActiveDataProvider([
            'query' => Product::find()->active()->forCategory($category->id)->orderBy(['id' => SORT_DESC]),
        ]);

        return $this->render('category', [
            'category' => $category,
            'dataProvider' => $dataProvider,
        ]);
    }
    
    public function actionView($id)
    {
        $model = $this->findProductModel($id);

        return $this->render('view', [
            'model' => $model,
        ]);
    }
}


