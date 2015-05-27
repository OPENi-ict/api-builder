<?php

use app\models\Objects;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Objects */
/* @var $form yii\widgets\ActiveForm */
/* @var $objectDropdownList yii\helpers\ArrayHelper */

$query = Objects::find();
$query->where(['privacy' => 'public']);
$query->where(['not in', 'name', ['Addressmodel', 'Timemodel', 'Durationmodel', 'Frommodel', 'Locationmodel', 'Sizemodel', 'Tagsmodel', 'Applicationmodel', 'Basefilemodel', 'Organizationmodel', 'Personmodel', 'Placemodel', 'Productmodel', 'Servicemodel', 'Cartproductlist', 'Cartservicelist', 'Cart_target_id', 'Orderproductlist', 'Orderservicelist', 'Registeredapplication_user']]);

$objectDropdownList = ArrayHelper::map( $query->all(), 'id', 'name' );
?>

<div class="objects-form">

	<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'name')->textInput(['maxlength' => 255, 'placeholder' => 'Must be a unique name']) ?>

	<?= $form->field($model, 'inherited')->dropDownList(
		$objectDropdownList,
		[ 'prompt' => '' ]
	) ?>

	<div class="form-group">
		<?= Html::submitButton('Duplicate', ['class' => 'btn btn-success']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
