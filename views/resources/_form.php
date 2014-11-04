<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Resources */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resources-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'resource_name')->textInput(['maxlength' => 255]) ?>

	<?php
	// resource_url
	// author
	// $form->field($model, 'resource_url')->textInput(['maxlength' => 255])

	// missing
	// likes
	// dislikes
	// used
	// created_at
	// updated_at
	// $form->field($model, 'created_at')->textInput()
	?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
