<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Objects */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $cbsDropdownList array */

?>

<div class="cbs-form">

	<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'cbs')->label('Cloud Based Services', ['class' => 'h3'])->checkboxList(
		$cbsDropdownList
	) ?>

	<div class="form-group">
		<?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
