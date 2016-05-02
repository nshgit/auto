<?php

use app\models\Attribute;
use app\models\Auto;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Value */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="value-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'auto_id')->hiddenInput(['value'=>$_GET['auto_id']])?>
    
    <?= $form->field($model, 'attribute_id')->dropDownList(Attribute::find()->select(['name','id'])->indexBy('id')->column(), ['prompt' => '']) ?>
    
    <?= $form->field($model, 'value')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
