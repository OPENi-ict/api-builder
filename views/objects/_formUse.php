<?php

use app\models\Objects;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Objects */
/* @var $form yii\widgets\ActiveForm */
/* @var $objectDropdownList yii\helpers\ArrayHelper */

$objectDropdownList = ArrayHelper::map( Objects::find()->where('privacy=:privacy', [':privacy' => 'public'])->all(), 'id', 'name' );
?>

<div class="objects-form">

	<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'inherited')->dropDownList(
		$objectDropdownList,
		[ 'prompt' => '' ]
	) ?>

	<div class="form-group">
		<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
