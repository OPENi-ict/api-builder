<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Resources */

$this->title = 'Create Resources';
$this->params['breadcrumbs'][] = ['label' => 'Resources', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resources-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
