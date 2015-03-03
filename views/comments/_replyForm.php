<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Comments */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comments-form">

	<?php $form = ActiveForm::begin(); ?>

	<?= Html::activeHiddenInput($model, 'api') ?>

	<?= Html::activeHiddenInput($model, 'object') ?>

	<?= Html::activeHiddenInput($model, 'property') ?>

	<?= $form->field($model, 'text')->label("Add your Comment")->textarea(['rows' => 6]) ?>

	<?= Html::activeHiddenInput($model, 'reply_to_comment') ?>

	<?php // $form->field($model, 'votes_up')->textInput() ?>

	<?php // $form->field($model, 'votes_down')->textInput() ?>

	<?php // $form->field($model, 'created_by')->textInput() ?>

	<?php // $form->field($model, 'updated_by')->textInput() ?>

	<?php // $form->field($model, 'created_at')->textInput() ?>

	<?php // $form->field($model, 'updated_at')->textInput() ?>

	<div class="form-group">
		<?= Html::submitButton('Comment', ['class' => 'btn btn-success']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
