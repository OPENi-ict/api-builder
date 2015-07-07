<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Apis */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="apis-form">

    <?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'name')->textInput(['maxlength' => 255, 'placeholder' => 'Graph API']) ?>

	<?= $form->field($model, 'description')->textInput(['maxlength' => 255, 'placeholder' => 'The best API in the world!']) ?>

    <?= $form->field($model, 'version')->textInput(['maxlength' => 255, 'placeholder' => '1.0']) ?>

    <?= $form->field($model, 'cbs')->hiddenInput()->label(false) ?>

	<?php // $form->field($model, 'created_by')->textInput() ?>

	<?php // $form->field($model, 'updated_by')->textInput() ?>

	<?php // $form->field($model, 'votes_up')->textInput() ?>

	<?php // $form->field($model, 'votes_down')->textInput() ?>

	<?php // $form->field($model, 'created_at')->textInput() ?>

	<?php // $form->field($model, 'updated_at')->textInput() ?>

	<?php // $form->field($model, 'published')->textInput() ?>

	<?php // $form->field($model, 'status')->dropDownList([ 'Under Development' => 'Under Development', 'Under Review' => 'Under Review', 'Approved' => 'Approved', ], ['prompt' => '']) ?>

	<?= $form->field($model, 'privacy')->dropDownList([ 'public' => 'Public', 'protected' => 'Protected', 'private' => 'Private', ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
