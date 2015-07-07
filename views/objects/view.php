<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Objects */
/* @var $searchModel app\models\PropertiesSearch */
/* @var $dataProviderBasic yii\data\ActiveDataProvider */
/* @var $dataProviderExceptBasic yii\data\ActiveDataProvider */
/* @var $methodDropdownList array */
/* @var $cbsDropdownList array */
/* @var $propose integer */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Apis', 'url' => ['apis/index']];
$this->params['breadcrumbs'][] = ['label' => $model->api0->name, 'url' => ['apis/view', 'id' => $model->api]];
$this->params['breadcrumbs'][] = $this->title;
?>

<?php if ($propose == 1) {
    $this->registerJs(
        '
		var options =  {
			content: "Your Proposal has been sent for approval to the Administrator", // text of the snackbar
			style: "toast", // add a custom class to your snackbar
			timeout: 3000 // time in milliseconds after the snackbar autohides, 0 is disabled
		};

		$.snackbar(options);'
    );
}
?>

<div class="objects-view">

	<h1>
		<?= Html::encode($this->title) ?>
		<small>
			<?= Html::encode($model->description) ?>
		</small>
		<br/>
		<small>
			<?= Html::a($model->votes_up, ['voteup', 'id' => $model->id, 'redirect' => 'view?id=' . $model->id], ['class' => 'like glyphicon glyphicon-thumbs-up nounderline', 'data' => ['toggle' => 'tooltip', 'placement' => 'right'], 'title' => 'Vote me Up']) ?>
			<?= Html::a($model->votes_down, ['votedown', 'id' => $model->id, 'redirect' => 'view?id=' . $model->id], ['class' => 'unlike glyphicon glyphicon-thumbs-down nounderline', 'data' => ['toggle' => 'tooltip', 'placement' => 'right'], 'title' => 'Vote me Down']) ?>
		</small>

		<?php if ($model->api0->name !== 'core') : ?>
			<span class="pull-right">
				<?php if ($model->proposed === 0): ?>
					<?= Html::a('Propose', ['propose', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
				<?php else : ?>
					<?= Html::a('Under Review', ['propose', 'id' => $model->id], ['class' => 'btn btn-info disabled']) ?>
				<?php endif; ?>
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

	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<h3>Properties</h3>

	<h4>Basic Properties</h4>

	<?= GridView::widget([
		'tableOptions' => ['class' => 'text-center'],
		'headerRowOptions' => ['class' => 'text-center'],
		'dataProvider' => $dataProviderBasic,
		//'filterModel' => $searchModel,
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],

			//'id',
			[
				'attribute' => 'name',
				'hAlign' => GridView::ALIGN_CENTER,
				'vAlign' => GridView::ALIGN_MIDDLE
			],
			[
				'attribute' => 'description',
				'hAlign' => GridView::ALIGN_CENTER,
				'vAlign' => GridView::ALIGN_MIDDLE
			],
			[
				'attribute' => 'type',
				'hAlign' => GridView::ALIGN_CENTER,
				'vAlign' => GridView::ALIGN_MIDDLE
			],
			[
				'attribute' => 'createdBy.username',
				'value'=>function ($model, $key, $index, $widget) {
					return Html::a($model->createdBy->username, ['/profile/view', 'id' => $model->createdBy->id]);
				},
				'format'=> 'raw',
				'hAlign' => GridView::ALIGN_CENTER,
				'vAlign' => GridView::ALIGN_MIDDLE
			],
			[
				'attribute' => 'created_at',
				'format' => 'date',
				'hAlign' => GridView::ALIGN_CENTER,
				'vAlign' => GridView::ALIGN_MIDDLE
			],
			//'updatedBy.username',
			//'updated_at:date',

			//['class' => 'kartik\grid\ActionColumn', 'controller' => 'properties', 'template' => '{view}'],
		],
	]); ?>

	<?php if ($model->api0->name !== 'core') : ?>
		<p>
			<?= Html::a('Create Property', ['properties/create', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
		</p>

		<h4>New Properties</h4>

		<?= GridView::widget([
			'tableOptions' => ['class' => 'text-center'],
			'headerRowOptions' => ['class' => 'text-center'],
			'dataProvider' => $dataProviderExceptBasic,
			//'filterModel' => $searchModel,
			'columns' => [
				['class' => 'yii\grid\SerialColumn'],

				//'id',
				[
					'attribute' => 'name',
					'hAlign' => GridView::ALIGN_CENTER,
					'vAlign' => GridView::ALIGN_MIDDLE
				],
				[
					'attribute' => 'description',
					'hAlign' => GridView::ALIGN_CENTER,
					'vAlign' => GridView::ALIGN_MIDDLE
				],
				[
					'attribute' => 'type',
					'hAlign' => GridView::ALIGN_CENTER,
					'vAlign' => GridView::ALIGN_MIDDLE
				],
				[
					'attribute' => 'createdBy.username',
					'value'=>function ($model, $key, $index, $widget) {
						return Html::a($model->createdBy->username, ['/profile/view', 'id' => $model->createdBy->id]);
					},
					'format'=> 'raw',
					'hAlign' => GridView::ALIGN_CENTER,
					'vAlign' => GridView::ALIGN_MIDDLE
				],
				[
					'attribute' => 'created_at',
					'format' => 'date',
					'hAlign' => GridView::ALIGN_CENTER,
					'vAlign' => GridView::ALIGN_MIDDLE
				],
				//'updatedBy.username',
				//'updated_at:date',

				['class' => 'kartik\grid\ActionColumn', 'controller' => 'properties'],
			],
		]); ?>

		<?= $this->render('_formMethods', [
			'model' => $model,
			'methodDropdownList' => $methodDropdownList,
			'cbsDropdownList' => $cbsDropdownList
		]) ?>

<!--		--><?php // $this->render('_formCBS', [
//			'model' => $model,
//			'cbsDropdownList' => $cbsDropdownList
//		]) ?>
	<?php endif; ?>
</div>
