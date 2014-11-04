<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Resources */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resources-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'resource_name')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'resource_url')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => 255]) ?>

	<?= $form->field($model, 'likes')->textInput() ?>

	<?= $form->field($model, 'dislikes')->textInput() ?>

	<?= $form->field($model, 'used')->textInput() ?>

	<?php
	// created_at
	// updated_at
	// $form->field($model, 'created_at')->textInput()
	?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
