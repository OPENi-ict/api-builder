<?php

use app\models\Objects;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Properties */
/* @var $form yii\widgets\ActiveForm */
/* @var $propertyDropdownList yii\helpers\ArrayHelper  Has all the available datatypes (string, integer, etc.) and the public objects but itself to make foreign keys.*/

// Find all the IDs of the Objects that are contained in this API so that we can populate the DropdownList below.
$objectsOfAPI = $model->object0->api0->objects;
$objectsIDs = [];
foreach($objectsOfAPI as $object) {
	// Exclude our Object as it can't be FK to itself.
	if ($object->id != $model->object)
		$objectsIDs[] = $object->id;
}

$propertyDropdownList = ArrayHelper::map( Objects::find()->where(['and', ['in', 'id', $objectsIDs]])->all(), 'name', 'name' );
$propertyDropdownList = ArrayHelper::merge([
	'integer' => 'integer',
	'long' => 'long',
	'float' => 'float',
	'double' => 'double',
	'string' => 'string',
	'byte' => 'byte',
	'boolean' => 'boolean',
	'date' => 'date',
	'dateTime' => 'dateTime',
	'--------' => '--------',
], $propertyDropdownList);
?>

<div class="properties-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 255, 'placeholder' => 'Property Name']) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => 255, 'placeholder' => 'Property Description']) ?>

    <?= $form->field($model, 'type')->dropDownList($propertyDropdownList, [
		'prompt' => '',
		'options' => ['--------' => ['disabled' => true]]
	]) ?>

    <?php // $form->field($model, 'object')->textInput() ?>

	<?php // $form->field($model, 'created_by')->textInput() ?>

	<?php // $form->field($model, 'updated_by')->textInput() ?>

	<?php // $form->field($model, 'created_at')->textInput() ?>

	<?php // $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
