<?php

use app\models\Objects;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Objects */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $propertyDropdownList yii\helpers\ArrayHelper */


$propertyDropdownList = [
	'Get '.$model->name => 'Get '.$model->name,
	'Post '.$model->name => 'Post '.$model->name,
	'Delete '.$model->name => 'Delete '.$model->name,
	'Get '.$model->name.'/{id}' => 'Get '.$model->name.'/{id}',
	'Put '.$model->name.'/{id}' => 'Put '.$model->name.'/{id}',
	'Delete '.$model->name.'/{id}' => 'Delete '.$model->name.'/{id}',
//	'--------' => '--------',
];

$methods = 'skata';
$properties = \app\models\Properties::find()->where('type=:type', [':type' => $model->name])->all();
foreach($properties as $property)
{
	$one = $property->getAttribute('object');
	$newObject = Objects::findOne($one);

	$propertyDropdownList = ArrayHelper::merge($propertyDropdownList,[
		'Get '.$model->name.'/{id}/'.$newObject->name => 'Get '.$model->name.'/{id}/'.$newObject->name,
		'Post '.$model->name.'/{id}/'.$newObject->name => 'Post '.$model->name.'/{id}/'.$newObject->name,
		'Delete '.$model->name.'/{id}/'.$newObject->name => 'Delete '.$model->name.'/{id}/'.$newObject->name,
//		'--------' => '--------',
	]);
};
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
