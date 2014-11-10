<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Apis */

$this->title = 'Create a new API';
$this->params['breadcrumbs'][] = ['label' => 'APIs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apis-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
