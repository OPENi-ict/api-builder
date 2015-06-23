<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ApiFromSwagger */

$this->title = 'Read Swagger';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="swagger-read">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model
    ]) ?>

</div>