<?php

use kartik\helpers\Html;
//use kartik\widgets\Select2;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $objectsModel \app\models\Objects */
/* @var $objectsData array */
/* @var $searchModel app\models\ObjectsSearch */
/* @var $objectsRecentDataProvider yii\data\ActiveDataProvider */
/* @var $objectsLikedDataProvider yii\data\ActiveDataProvider */

$columns = [
	[
		'attribute' => 'name',
		'value'=>function ($model, $key, $index, $widget) {
			return Html::a($model->name, ['/objects/view', 'id' => $model->id]);
		},
		'format'=> 'raw',
		'hAlign' => GridView::ALIGN_CENTER,
		'vAlign' => GridView::ALIGN_MIDDLE
	],
	//'resource_url:url',
	[
		'attribute' => '',
		'label' => 'Votes',
		'value'=>function ($model, $key, $index, $widget) {
			return
				Html::a($model->votes_up, ['objects/voteup', 'id' => $model->id], ['class' => 'like glyphicon glyphicon-thumbs-up nounderline', 'data' => ['toggle' => 'tooltip', 'placement' => 'right'], 'title' => 'Vote me Up'])
				 .
				' / ' .
				Html::a($model->votes_down, ['objects/votedown', 'id' => $model->id], ['class' => 'unlike glyphicon glyphicon-thumbs-down nounderline', 'data' => ['toggle' => 'tooltip', 'placement' => 'right'], 'title' => 'Vote me Down']);
		},
		'format'=>'raw',
		'hAlign' => GridView::ALIGN_CENTER,
		'vAlign' => GridView::ALIGN_MIDDLE
	],
	[
		'attribute' => 'createdBy.username',
		'value'=>function ($model, $key, $index, $widget) {
			return Html::a($model->createdBy->username, ['/profile/view', 'id' => $model->createdBy->id]);
		},
		'format'=>'raw',
		'hAlign' => GridView::ALIGN_CENTER,
		'vAlign' => GridView::ALIGN_MIDDLE
	],
	[
		'attribute' => 'created_at',
		'format' => 'date',
		'hAlign' => GridView::ALIGN_CENTER,
		'vAlign' => GridView::ALIGN_MIDDLE
	]
];

$objectsRecentDataProvider->pagination->pageParam = 'recent-page';
//$objectsRecentDataProvider->sort->sortParam = 'recent-sort';

$objectsLikedDataProvider->pagination->pageParam = 'liked-page';
//$objectsLikedDataProvider->sort->sortParam = 'liked-sort';

$this->title = 'API Builder';
?>
<div class="site-index">

    <div class="jumbotron">
        <h2>OPENi API Builder</h2>

        <p class="lead">Create, use and recommend your favorite API with immediate connection to Cloud Based Services.</p>
    </div>

    <div class="body-content text-center">

		<?php
//			echo Select2::widget([
//				'model' => $objectsModel,
//				'attribute' => 'name',
//				'data' => array_merge(["" => ""], $objectsData),
//				'options' => ['placeholder' => 'Search for Objects ...'],
//				'pluginOptions' => [
//					'allowClear' => true
//				],
//			]);
		?>
        <div class="row text-center">
<!--            <div class="col-lg-4">-->
<!--                <h2>Most Used</h2>-->

<!--				--><?php //GridView::widget([
//					'dataProvider' => $resourcesUsedDataProvider,
//					'hover' => true,
//					'columns' => $columns
//				]); ?>
<!--            </div>-->
            <div class="col-lg-6">
                <h2>Most Recent</h2>

				<?= GridView::widget([
					'dataProvider' => $objectsRecentDataProvider,
					'hover' => true,
					'columns' => $columns
				]); ?>
            </div>
            <div class="col-lg-6">
                <h2>Most Popular</h2>

				<?= GridView::widget([
					'dataProvider' => $objectsLikedDataProvider,
					'hover' => true,
					'columns' => $columns
				]); ?>
            </div>
        </div>

    </div>
</div>
