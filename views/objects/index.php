<?php

use kartik\helpers\Html;
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

	<?= GridView::widget([
		'tableOptions' => ['class' => 'text-center'],
		'headerRowOptions' => ['class' => 'text-center'],
		'rowOptions' => ['class' => 'text-center'],
		'dataProvider' => $dataProvider,
		//'filterModel' => $searchModel,
		'columns' => [
			['class' => 'kartik\grid\SerialColumn'],

			//'id',
			[
				'attribute' => 'name',
				'value'=>function ($model, $key, $index, $widget) {
					return Html::a($model->name, ['view', 'id' => $model->id]);
				},
				'format'=> 'raw',
				'hAlign' => GridView::ALIGN_CENTER,
				'vAlign' => GridView::ALIGN_MIDDLE
			],
			[
				'attribute' => 'description',
				'hAlign' => GridView::ALIGN_CENTER,
				'vAlign' => GridView::ALIGN_MIDDLE
			],
			[
				'attribute' => 'api0.name',
				'hAlign' => GridView::ALIGN_CENTER,
				'vAlign' => GridView::ALIGN_MIDDLE
			],
			[
				'attribute' => 'inherited0.name',
				'hAlign' => GridView::ALIGN_CENTER,
				'vAlign' => GridView::ALIGN_MIDDLE
			],
			[
				'attribute' => 'privacy',
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
			// 'methods:ntext',
			// 'updated_by',
			// 'updated_at',
			[
				'attribute' => '',
				'label' => 'Votes',
				'value'=>function ($model, $key, $index, $widget) {
					return
						Html::a($model->votes_up, ['objects/voteup', 'id' => $model->id, 'redirect' => 'index'], ['class' => 'like glyphicon glyphicon-thumbs-up nounderline', 'data' => ['toggle' => 'tooltip', 'placement' => 'right'], 'title' => 'Vote me Up'])
						.
						' / ' .
						Html::a($model->votes_down, ['objects/votedown', 'id' => $model->id, 'redirect' => 'index'], ['class' => 'unlike glyphicon glyphicon-thumbs-down nounderline', 'data' => ['toggle' => 'tooltip', 'placement' => 'right'], 'title' => 'Vote me Down']);
				},
				'format'=>'raw',
				'hAlign' => GridView::ALIGN_CENTER,
				'vAlign' => GridView::ALIGN_MIDDLE
			],

			['class' => 'kartik\grid\ActionColumn'],
		],
	]); ?>

</div>
