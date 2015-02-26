<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'role')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'votes_up_apis')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'votes_down_apis')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'votes_up_objects')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'votes_down_objects')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'votes_up_comments')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'votes_down_comments')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
