<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Apis */

$this->title = 'Update Cbs: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Cbs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cbs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
