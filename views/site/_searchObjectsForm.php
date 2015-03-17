<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Objects */
/* @var $form yii\widgets\ActiveForm */
/* @var $data array */

$addon = [
	'append' => [
		'content' => Html::submitButton('Go', ['class' => 'btn btn-primary btn-lg']),
//		'asButton' => true
	]
];
?>

<div class="search-objects">

	<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'name')->label('')->widget(Select2::className(), [
			'data' => array_merge(["" => ""], $data),
			'options' => ['placeholder' => 'Search for Objects ...'],
			'pluginOptions' => [
				'allowClear' => true
			],
			'size' => 'lg',
			'addon' => $addon
		]); ?>

	<?php ActiveForm::end(); ?>

</div>