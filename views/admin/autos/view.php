<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Auto */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Autos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auto-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            
            [
                'attribute' => 'category_id',
                'value' => ArrayHelper::getValue($model, 'category.name'),
            ],
            [
                'attribute' => 'marka_id',
                'value' => ArrayHelper::getValue($model, 'marka.name'),
            ],
           /** [
                'label' => 'Атрибуты',
                'value' => implode(', ', ArrayHelper::map($model->attributes()->values, 'id', 'name')),
            ],*/
            'name',
            'content:ntext',
            'date',
        ],
    ]) ?>
    
    <p>
        <?php echo Html::a('Добавить значение атрибута',['admin/values/create', 'auto_id' => $model->id], ['class' => 'btn btn-primary'])?>
    </p>
    
    <?= GridView::widget([
        'dataProvider' => new ActiveDataProvider(['query' => $model->getValues()]),
        'filterModel' => $searchModel,
        'columns' => [
            [
                'attribute' => 'attribute_id',
                'value' => 'autoAttribute.name'
            ],
            'value',

            [
                'class' => 'yii\grid\ActionColumn',
                'controller' => 'admin/values',
            ],
        ],
    ]); ?>
</div>
