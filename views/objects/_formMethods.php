<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Objects */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $propertyDropdownList array */

?>

<div class="objects-form">

	<?php $form = ActiveForm::begin(); ?>

	<?php
//	foreach($methodCheckboxList as $key => $value)
//	{
//		echo $form->field($model, 'methods', ['options' => ['class' => 'checkbox']])->checkboxList(
//			$methodCheckboxList
//		);
//	}
	?>

	<?= $form->field($model, 'methods')->checkboxList(
		$propertyDropdownList
	) ?>

	<div class="form-group">
		<?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
