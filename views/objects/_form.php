<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Objects */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="objects-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'api')->textInput() ?>

    <?= $form->field($model, 'inherited')->textInput() ?>

    <?= $form->field($model, 'privacy')->dropDownList([ 'public' => 'Public', 'private' => 'Private', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'fields')->textInput() ?>

    <?= $form->field($model, 'methods')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'author')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
