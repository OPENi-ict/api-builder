<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $message string */
/* @var $model app\models\ApiFromSwagger */
/* @var $dataProvider yii\data\ArrayDataProvider */

$this->title = 'Create API from Swagger';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="swagger-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if ($message !== '') : ?>
        <div class="panel panel-danger">
            <div class="panel-heading">
                <h3 class="panel-title">Overwrite previous version</h3>
            </div>
            <div class="panel-body">
                There is already an API with same name uploaded by you. Are you sure you want to overwrite it?
            </div>
        </div>
    <?php endif; ?>

    <?= $this->render('_completeForm', [
        'model' => $model,
        'dataProvider' => $dataProvider,
        'message' => $message
    ]) ?>

</div>