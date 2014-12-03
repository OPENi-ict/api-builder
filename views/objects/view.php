<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Objects */
/* @var $searchModel app\models\PropertiesSearch */
/* @var $dataProviderBasic yii\data\ActiveDataProvider */
/* @var $dataProviderExceptBasic yii\data\ActiveDataProvider */
/* @var $propertyDropdownList array */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Apis', 'url' => ['apis/index']];
$this->params['breadcrumbs'][] = ['label' => $model->api0->name, 'url' => ['apis/view', 'id' => $model->api]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="objects-view">

	<h1>
		<?= Html::encode($this->title) ?>
		<small><?= Html::encode($model->description) ?></small>

		<?php if ($model->api0->name != 'core') : ?>
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

	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<h3>Properties</h3>

	<h4>Basic Properties</h4>

	<?= GridView::widget([
		'dataProvider' => $dataProviderBasic,
		//'filterModel' => $searchModel,
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],

			//'id',
			'name',
			'description',
			'type',
			'createdBy.username',
			//'updatedBy.username',
			'created_at:date',
			//'updated_at:date',

			['class' => 'kartik\grid\ActionColumn', 'controller' => 'properties', 'template' => '{view}'],
		],
	]); ?>

	<?php if ($model->api0->name != 'core') : ?>
		<p>
			<?= Html::a('Create Property', ['properties/create', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
		</p>

		<h4>New Properties</h4>

		<?= GridView::widget([
			'dataProvider' => $dataProviderExceptBasic,
			//'filterModel' => $searchModel,
			'columns' => [
				['class' => 'yii\grid\SerialColumn'],

				//'id',
				'name',
				'description',
				'type',
				'createdBy.username',
				//'updatedBy.username',
				'created_at:date',
				//'updated_at:date',

				['class' => 'yii\grid\ActionColumn', 'controller' => 'properties'],
			],
		]); ?>

		<?= $this->render('_formMethods', [
			'model' => $model,
			'propertyDropdownList' => $propertyDropdownList
		]) ?>
	<?php endif; ?>
</div>
