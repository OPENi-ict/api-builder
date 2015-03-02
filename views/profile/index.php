<?php

use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $votedUpAPIsDataProvider yii\data\ActiveDataProvider */
/* @var $votedDownAPIsDataProvider yii\data\ActiveDataProvider */
/* @var $votedUpObjectsDataProvider yii\data\ActiveDataProvider */
/* @var $votedDownObjectsDataProvider yii\data\ActiveDataProvider */
/* @var $votedUpCommentsDataProvider yii\data\ActiveDataProvider */
/* @var $votedDownCommentsDataProvider yii\data\ActiveDataProvider */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$noSummaryLayout = "{items}\n{pager}";

$apiColumns = [
	[
		'attribute' => 'name',
		'value'=>function ($model, $key, $index, $widget) {
			return
				Html::a($model->name, ['apis/', 'id' => $model->id]);
		},
		'format'=>'raw',
	],
	'version'
];

$objectColumns = [
	[
		'attribute' => 'name',
		'value'=>function ($model, $key, $index, $widget) {
			return
				Html::a($model->name, ['objects/', 'id' => $model->id]);
		},
		'format'=>'raw',
	],
	'createdBy.username'
];

$commentColumns = [
	[
		'attribute' => 'name',
		'value'=>function ($model, $key, $index, $widget) {
			return
				Html::a($model->name, ['comments/', 'id' => $model->id]);
		},
		'format'=>'raw',
	],
	'version'
]
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>

	<?= DetailView::widget([
		'model' => $model,
		'attributes' => [
			'email:email',
			[
				'attribute'=>'photo',
				'value'=>$model->getImage()->getUrl('120'),
				'format' => ['image',['width'=>'120','height'=>'120']],
			],
			'created_at:date',
		],
	]) ?>

	<div class="row text-center">
		<div class="col-lg-6">

			<h3>Voted Up</h3>

			<h4>APIs</h4>

			<?= GridView::widget([
				'dataProvider' => $votedUpAPIsDataProvider,
				'columns' => $apiColumns,
				'layout' => $noSummaryLayout
			]); ?>

			<h4>Objects</h4>

			<?= GridView::widget([
				'dataProvider' => $votedUpObjectsDataProvider,
				'columns' => $objectColumns,
				'layout' => $noSummaryLayout
			]); ?>

		</div>
		<div class="col-lg-6">

			<h3>Voted Down</h3>

			<h4>APIs</h4>

			<?= GridView::widget([
				'dataProvider' => $votedDownAPIsDataProvider,
				'columns' => $apiColumns,
				'layout' => $noSummaryLayout
			]); ?>

			<h4>Objects</h4>

			<?= GridView::widget([
				'dataProvider' => $votedDownObjectsDataProvider,
				'columns' => $objectColumns,
				'layout' => $noSummaryLayout
			]); ?>

		</div>
	</div>

</div>
