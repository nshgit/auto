<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Value */

$this->title = 'Update Value: ' . $model->auto_id;
$this->params['breadcrumbs'][] = ['label' => 'Values', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->auto_id, 'url' => ['view', 'auto_id' => $model->auto_id, 'attribute_id' => $model->attribute_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="value-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
