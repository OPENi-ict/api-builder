<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Comments */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comments-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php // $form->field($model, 'api')->textInput() ?>

    <?php // $form->field($model, 'object')->textInput() ?>

    <?php // $form->field($model, 'property')->textInput() ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

    <?php // $form->field($model, 'reply_to_comment')->textInput() ?>

    <?php // $form->field($model, 'votes_up')->textInput() ?>

    <?php // $form->field($model, 'votes_down')->textInput() ?>

    <?php // $form->field($model, 'created_by')->textInput() ?>

    <?php // $form->field($model, 'updated_by')->textInput() ?>

    <?php // $form->field($model, 'created_at')->textInput() ?>

    <?php // $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
