<?php

use app\widgets\Comments;
use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Apis */
/* @var $searchModel app\models\ObjectsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $commentsModel app\models\Comments */
/* @var $commentsProvider yii\data\ActiveDataProvider */
/* @var $repliesProvider yii\data\ActiveDataProvider */
/* @var $propose integer */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Apis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>

<?php if ($propose == 1)
	$this->registerJs(
		'
		var options =  {
			content: "Your Proposal has been sent for approval to the Administrator", // text of the snackbar
			style: "toast", // add a custom class to your snackbar
			timeout: 3000 // time in milliseconds after the snackbar autohides, 0 is disabled
		};

		$.snackbar(options);'
	);
?>

<div class="apis-view">

	<h1>
		<?= Html::encode($this->title) ?>
		<small>
			<?= Html::encode($model->description) ?>
		</small>
		<br/>
		<small>
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

	<?php if (($model->proposed === 1) and ($model->published === 1)) : ?>
		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">Information</h3>
			</div>
			<div class="panel-body">
				As your proposal for this API is under review, have in mind that the swagger interface is not fully functional.
			</div>
		</div>
	<?php endif; ?>

	<?php if ($model->name != 'core') : ?>
		<?= Html::a('Publish <span class="glyphicon glyphicon-upload" aria-hidden="true"></span>', ['publish', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
		<?= Html::a('View Swagger', ['swagger/', 'url' => $model->name], ['class' => 'btn btn-primary']) ?>
		<?php if ($model->proposed === 0): ?>
			<?= Html::a('Propose', ['propose', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
		<?php else : ?>
			<?= Html::a('Under Review', ['propose', 'id' => $model->id], ['class' => 'btn btn-info disabled']) ?>
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
				'width' => '80px',
				'hAlign' => GridView::ALIGN_CENTER,
				'vAlign' => GridView::ALIGN_MIDDLE
			],
			[
				'attribute' => 'createdBy.username',
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
			//'proposed',
			//'published',

			($model->name != 'core') ? ['class' => 'kartik\grid\ActionColumn', 'controller' => 'objects'] : ['class' => 'kartik\grid\ActionColumn', 'controller' => 'objects', 'template' => '{view}'],
		],
	]); ?>

	<h3>Comments</h3>

	<!-- Comments Section -->
	<?= Comments::widget([
		'dataProvider' => $commentsProvider,
		'repliesProvider' => $repliesProvider,
		'model' => $commentsModel
	]);	?>
	<!-- End Comments Section -->

</div>
