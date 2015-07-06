<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Apis */

$this->title = 'Create Cbs';
$this->params['breadcrumbs'][] = ['label' => 'Cbs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cbs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
