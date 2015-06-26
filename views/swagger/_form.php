<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ApiFromSwagger */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="swagger-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?php // $form->field($model, 'name')->textInput(['maxlength' => 255, 'placeholder' => 'Graph API']) ?>

    <?php // $form->field($model, 'description')->textInput(['maxlength' => 255, 'placeholder' => 'The best API in the world!']) ?>

    <?php // $form->field($model, 'version')->textInput(['maxlength' => 255, 'placeholder' => '1.0']) ?>

    <?php // $form->field($model, 'privacy')->dropDownList([ 'public' => 'Public', 'protected' => 'Protected', 'private' => 'Private', ]) ?>

    <?= $form->field($model, 'swagger_url')->textInput(['maxlength' => 255, 'placeholder' => '']) ?>

<!--    <br /><br />-->
<!--    <p class="text-center"><strong>or</strong></p>-->
<!--    <br /><br />-->

    <?php //$form->field($model, 'swagger_file')->widget(FileInput::classname(), [
//        'attribute' => 'attachment[]',
//        'options' => ['multiple' => true],
//        'pluginOptions' => [
//            'mainClass' => 'input-group-lg',
//            'showUpload' => false,
//            'showRemove' => false,
//            'showPreview' => false
//        ]
//    ]) ?>

<!--    <br /><br />-->

    <?php // $form->field($model, 'name')->textInput(['maxlength' => 255, 'placeholder' => '']) ?>

    <?php // $form->field($model, 'description')->textInput(['maxlength' => 255, 'placeholder' => '']) ?>

    <?php // $form->field($model, 'privacy')->dropDownList([ 'public' => 'Public', 'protected' => 'Protected', 'private' => 'Private']) ?>

    <?php // $form->field($model, 'swagger_version')->dropDownList([ '1.1' => '1.1', '1.2' => '1.2', '2.0' => '2.0']) ?>

    <div class="form-group">
        <?= Html::submitButton('Read', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>