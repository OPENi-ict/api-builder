<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Properties */
/* @var $form yii\widgets\ActiveForm */
/* @var $objectDropdownList yii\helpers\ArrayHelper */

$propertyDropdownList = ArrayHelper::map( Objects::find()->where('privacy=:privacy', [':privacy' => 'public'])->all(), 'id', 'name' );
?>

<div class="properties-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 255, 'placeholder' => 'Property Name']) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => 255, 'placeholder' => 'Property Description']) ?>

    <?= $form->field($model, 'type')->dropDownList($propertyDropdownList, [ 'prompt' => '' ]) ?>

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
