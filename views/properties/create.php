<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $api app\models\Apis */
/* @var $object app\models\Objects */
/* @var $model app\models\Properties */

$this->title = 'Create Properties';
$this->params['breadcrumbs'][] = ['label' => 'Apis', 'url' => ['apis/index']];
$this->params['breadcrumbs'][] = ['label' => $api->name, 'url' => ['apis/view', 'id' => $api->id]];
$this->params['breadcrumbs'][] = ['label' => $object->name, 'url' => ['objects/view', 'id' => $object->id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="properties-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
