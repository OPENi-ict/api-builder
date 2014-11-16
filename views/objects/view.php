<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Objects */
/* @var $searchModel app\models\PropertiesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Apis', 'url' => ['apis/index']];
$this->params['breadcrumbs'][] = ['label' => $model->api0->name, 'url' => ['apis/view', 'id' => $model->api]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="objects-view">

	<h1><?= Html::encode($this->title) ?></h1>
	<h4><?= Html::encode($model->description) ?></h4>

	<p>
		<?= Html::a('Create Property', ['properties/create', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
		<?= Html::a('Duplicate Property', ['properties/duplicate', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
	</p>

	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		//'filterModel' => $searchModel,
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],

			'id',
			'name',
			'description',
			'type',
			'createdBy.username',
			'updatedBy.username',
			'created_at:date',
			'updated_at:date',

			['class' => 'yii\grid\ActionColumn', 'controller' => 'properties'],
		],
	]); ?>

</div>
