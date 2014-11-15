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

	<?= $form->field($model, 'inherited')->textInput(['readonly' => true]) ?>

	<?= $form->field($model, 'privacy')->dropDownList([ 'public' => 'Public', 'private' => 'Private', ], ['options' => ['public' => ['selected' => true]]]) ?>

	<div class="form-group">
		<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
