<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Apis */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Cbs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cbs-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'description',
            'version',
            'url:url',
            'status',
            //'created_by',
			[
				'attribute' => 'createdBy.username',
				'value'=>Html::a($model->createdBy->username, ['/profile/view', 'id' => $model->createdBy->id]),
				'format'=> 'raw',
			],
            'created_at:date',
        ],
    ]) ?>

</div>
