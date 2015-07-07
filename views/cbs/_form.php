<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Apis */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cbs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 255, 'placeholder' => 'New CBS']) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => 255, 'placeholder' => 'Optional']) ?>

    <?= $form->field($model, 'version')->textInput(['maxlength' => 255, 'placeholder' => '1.0']) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => 255, 'placeholder' => 'http://dev.cbs.org']) ?>

    <?= $form->field($model, 'cbs')->hiddenInput()->label(false) ?>

    <?php // $form->field($model, 'status')->dropDownList([ 'approved' => 'Approved', 'pending' => 'Pending', ], ['prompt' => '']) ?>

    <?php // $form->field($model, 'created_by')->textInput() ?>

    <?php // $form->field($model, 'created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
