<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Objects */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $methodDropdownList array */
/* @var $cbsDropdownList array */

?>

<div class="methods-form">

	<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'methods')->label('Methods', ['class' => 'h3'])->checkboxList(
		$methodDropdownList
	) ?>

	<?= $form->field($model, 'selectedCbs')->label('Cloud Based Services', ['class' => 'h3'])->checkboxList(
		$cbsDropdownList
	) ?>

	<div class="form-group">
		<?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
