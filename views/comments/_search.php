<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CommentsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comments-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'api') ?>

    <?= $form->field($model, 'object') ?>

    <?= $form->field($model, 'property') ?>

    <?= $form->field($model, 'text') ?>

    <?php // echo $form->field($model, 'reply_to_comment') ?>

    <?php // echo $form->field($model, 'votes_up') ?>

    <?php // echo $form->field($model, 'votes_down') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
