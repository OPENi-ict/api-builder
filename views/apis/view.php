<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Apis */
/* @var $searchModel app\models\ObjectsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Apis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apis-view">

	<h1>
		<?= Html::encode($this->title) ?>
		<small>
			<?= Html::encode($model->description) ?>
			<?= Html::a($model->votes_up, ['voteup', 'id' => $model->id, 'redirect' => 'view?id=' . $model->id], ['class' => 'glyphicon glyphicon-thumbs-up nounderline']) ?>
			<?= Html::a($model->votes_down, ['votedown', 'id' => $model->id, 'redirect' => 'view?id=' . $model->id], ['class' => 'glyphicon glyphicon-thumbs-down nounderline']) ?>
		</small>

		<?php if ($model->name != 'core') : ?>
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

	<?php if ($model->name != 'core') : ?>
		<?= Html::a('Publish <span class="glyphicon glyphicon-upload" aria-hidden="true"></span>', ['publish', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
		<?= Html::a('View Swagger', ['swagger/', 'url' => $model->name], ['class' => 'btn btn-primary']) ?>
		<?php if ($model->proposed === 0): ?>
			<?= Html::a('Propose', ['propose', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
		<?php endif; ?>
	<?php endif; ?>

	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<h3>Objects</h3>

	<?php if ($model->name != 'core') : ?>
		<p>
		<?= Html::a('Create Object', ['objects/create', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
		<?= Html::a('Duplicate Object', ['objects/duplicate', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
		</p>
	<?php endif; ?>

	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		//'filterModel' => $searchModel,
		'columns' => [
			['class' => 'kartik\grid\SerialColumn'],

			//'id',
			'name',
			'description',
			[
				'attribute' => '',
				'label' => 'Votes',
				'value'=>function ($model, $key, $index, $widget) {
					return
						Html::a($model->votes_up, ['objects/voteup', 'id' => $model->id], ['class' => 'glyphicon glyphicon-thumbs-up nounderline'])
						.
						' / ' .
						Html::a($model->votes_down, ['objects/votedown', 'id' => $model->id], ['class' => 'glyphicon glyphicon-thumbs-down nounderline']);
				},
				'format'=>'raw',
				'hAlign' => GridView::ALIGN_CENTER
			],
			'createdBy.username',
			//'updatedBy.username',
			'created_at:date',
			//'updated_at:date',
			//'proposed',
			//'published',

			($model->name != 'core') ? ['class' => 'kartik\grid\ActionColumn', 'controller' => 'objects'] : ['class' => 'kartik\grid\ActionColumn', 'controller' => 'objects', 'template' => '{view}'],
		],
	]); ?>

</div>
