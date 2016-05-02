<?php
use app\models\Category;
use app\models\Auto;
use app\models\Marka;
use app\models\Product;
use app\models\Tag;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\data\ActiveDataProvider;

/* @var $this yii\web\View */
/* @var $searchModel app\models\admin\search\AutosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Автомобили';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auto-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить автомобиль', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            
            [
                'attribute' => 'category_id',
                'filter' => Category::find()->select(['name', 'id'])->indexBy('id')->column(),
                'value' => 'category.name',
            ],
            [
                'attribute' => 'marka_id',
                'filter' => Marka::find()->select(['name', 'id'])->indexBy('id')->column(),
                'value' => 'marka.name',
            ],
            
            
            /**[
                'attribute' => 'name',
                'filter' => Auto::find()->select('name')->indexBy('name')->column(),
                'value' => 'name',
            ],*/
            'name',
            'content:ntext',
            'date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
