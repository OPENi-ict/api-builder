<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Apis */
/* @var $categoriesList array */

$this->title = 'Choose Category for ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Apis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apis-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_chooseCategoryForm', [
        'model' => $model,
        'categoriesList' => $categoriesList
    ]) ?>

</div>
