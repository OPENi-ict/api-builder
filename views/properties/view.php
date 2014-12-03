<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Properties */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Apis', 'url' => ['apis/index']];
$this->params['breadcrumbs'][] = ['label' => $model->object0->api0->name, 'url' => ['apis/view', 'id' => $model->object0->api]];
$this->params['breadcrumbs'][] = ['label' => $model->object0->name, 'url' => ['objects/view', 'id' => $model->object]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="properties-view">

	<h1>
		<?= Html::encode($this->title) ?>
		<small><?= Html::encode($model->description) ?></small>

		<?php if (
			($model->object0->api0->name != 'core') and
			($model->name != 'id') and
			($model->name != 'resource_uri') and
			($model->name != 'service') and
			($model->name != 'object_type')
		): ?>
			<span class="pull-right">
				<?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
				<?= Html::a('Delete', ['delete', 'id' => $model->id], [
					'class' => 'btn btn-danger',
					'data' => [
						'confirm' => 'Are you sure you want to delete this item?',
						'method' => 'post',
					],
				]) ?>
			</span>
		<?php endif; ?>
	</h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'description',
            'type',
            //'object',
			'object0.name',
			'createdBy.username',
            'updatedBy.username',
            'created_at:date',
            'updated_at:date',
        ],
    ]) ?>

</div>
