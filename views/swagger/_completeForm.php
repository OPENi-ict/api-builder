<?php

use kartik\grid\GridView;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ApiFromSwagger */
/* @var $message string */
/* @var $form yii\widgets\ActiveForm */
/* @var $dataProvider yii\data\ArrayDataProvider */

?>

<div class="swagger-form">

    <h2>API Details</h2>

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 255, 'placeholder' => 'Graph API']) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => 255, 'placeholder' => 'The best API in the world!']) ?>

    <?= $form->field($model, 'host_url')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'version')->textInput(['maxlength' => 255, 'placeholder' => '1.0']) ?>

    <?= $form->field($model, 'privacy')->dropDownList([ 'public' => 'Public', 'protected' => 'Protected', 'private' => 'Private', ]) ?>

    <?= $form->field($model, 'swagger_url')->hiddenInput()->label(false) ?>

    <h2>Objects</h2>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'name',
                'hAlign' => GridView::ALIGN_CENTER,
                'vAlign' => GridView::ALIGN_MIDDLE
            ],
            [
                'attribute' => 'description',
                'hAlign' => GridView::ALIGN_CENTER,
                'vAlign' => GridView::ALIGN_MIDDLE
            ],
//            [
//                'attribute' => 'methods',
//                'hAlign' => GridView::ALIGN_CENTER,
//                'vAlign' => GridView::ALIGN_MIDDLE
//            ]
        ],
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton($message === '' ? 'Create' : 'Overwrite', [
            'class' => $message === '' ? 'btn btn-success' : 'btn btn-warning',
            'data' => $message === '' ? [] : [
                'confirm' => 'Are you sure you want to overwrite this item?',
                'method' => 'post',
            ]
        ]) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>