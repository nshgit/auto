<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Value */

$this->title = $model->auto_id;
$this->params['breadcrumbs'][] = ['label' => 'Values', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="value-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'auto_id' => $model->auto_id, 'attribute_id' => $model->attribute_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'auto_id' => $model->auto_id, 'attribute_id' => $model->attribute_id], [
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
            'auto_id',
            'attribute_id',
            'value',
        ],
    ]) ?>

</div>
