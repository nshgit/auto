<?php

use app\models\Category;
use app\models\Marka;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Auto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="auto-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'category_id')->dropDownList(Category::find()->select(['name','id'])->indexBy('id')->column(), ['prompt' => '']) ?>
    
    <?= $form->field($model, 'marka_id')->dropDownList(Marka::find()->select(['name','id'])->indexBy('id')->column(), ['prompt' => '']) ?>
    
    
    <?/** = $form->field($model, 'nam=e')->dropDownList(Auto::find()->select('name')->indexBy('name')->column(), ['prompt' => '']) **/ ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
