<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Objects */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="objects-form">

	<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'name')->textInput(['maxlength' => 255, 'placeholder' => 'Object Name']) ?>

	<?= $form->field($model, 'description')->textInput(['maxlength' => 255, 'placeholder' => 'Object Description']) ?>

	<?php // $form->field($model, 'api')->textInput() ?>

	<?php // $form->field($model, 'inherited')->textInput(['readonly' => true]) ?>

	<?= $form->field($model, 'privacy')->dropDownList([ 'public' => 'Public', 'protected' => 'Protected', 'private' => 'Private', ]) ?>

	<?php // $form->field($model, 'methods')->textarea(['rows' => 6]) ?>

	<?php // $form->field($model, 'created_by')->textInput() ?>

	<?php // $form->field($model, 'updated_by')->textInput() ?>

	<?php // $form->field($model, 'created_at')->textInput() ?>

	<?php // $form->field($model, 'updated_at')->textInput() ?>

	<?php // $form->field($model, 'votes_up')->textInput() ?>

	<?php // $form->field($model, 'votes_down')->textInput() ?>

	<div class="form-group">
		<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
