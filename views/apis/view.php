<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Apis */
/* @var $searchModel app\models\ObjectsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Apis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apis-view">

	<h1><?= Html::encode($this->title) ?></h1>
	<h4><?= Html::encode($model->description) ?></h4>

	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<p>
		<?= Html::a('Create Object', ['objects/create', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
		<?= Html::a('Duplicate Object', ['objects/duplicate', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
	</p>

	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		//'filterModel' => $searchModel,
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],

			'id',
			'name',
			'description',
			'createdBy.username',
			'updatedBy.username',
			'created_at:date',
			'updated_at:date',

			['class' => 'yii\grid\ActionColumn', 'controller' => 'objects'],

//			['class' => 'yii\grid\ActionColumn',
//				'template' => '{new_action1}{new_action2}',
//				'buttons' => [
//					'new_action1' => function ($url, $model) {
//						return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [
//							'title' => Yii::t('app', 'New Action1'),
//						]);
//					}
//				],
//				'urlCreator' => function ($action, $model, $key, $index) {
//					if ($action === 'new_action1') {
//						$url ='controller/action?id='.$model->id;
//						return $url;
//					}
//				}
//			],
		],
	]); ?>

</div>
