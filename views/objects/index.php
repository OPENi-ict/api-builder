<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ObjectsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Objects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="objects-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Objects', ['create', 'id' => 1], ['class' => 'btn btn-success']) ?>
    </p>

	<?= GridView::widget([
		'tableOptions' => ['class' => 'table table-striped table-bordered text-center'],
		'headerRowOptions' => ['class' => 'text-center'],
		'dataProvider' => $dataProvider,
		//'filterModel' => $searchModel,
		'columns' => [
			['class' => 'kartik\grid\SerialColumn'],

			//'id',
			[
				'attribute' => 'name',
				'hAlign' => GridView::ALIGN_CENTER
			],
			[
				'attribute' => 'description',
				'hAlign' => GridView::ALIGN_CENTER
			],
			'api0.name',
			'inherited0.name',
			'privacy',
			// 'methods:ntext',
			'createdBy.username',
			// 'updated_by',
			'created_at:date',
			// 'updated_at',
			[
				'attribute' => '',
				'label' => 'Votes',
				'value'=>function ($model, $key, $index, $widget) {
					return
						Html::a($model->votes_up, ['objects/voteup', 'id' => $model->id, 'redirect' => 'index'], ['class' => 'glyphicon glyphicon-thumbs-up nounderline'])
						.
						' / ' .
						Html::a($model->votes_down, ['objects/votedown', 'id' => $model->id, 'redirect' => 'index'], ['class' => 'glyphicon glyphicon-thumbs-down nounderline']);
				},
				'format'=>'raw',
				'hAlign' => GridView::ALIGN_CENTER
			],

			['class' => 'kartik\grid\ActionColumn'],
		],
	]); ?>

</div>
