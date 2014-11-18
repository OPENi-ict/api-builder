<?php

use kartik\helpers\Html;
use kartik\widgets\Select2;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $apisModel \app\models\Resources */
/* @var $apisData array */
/* @var $searchModel app\models\ResourcesSearch */
/* @var $apisRecentDataProvider yii\data\ActiveDataProvider */
/* @var $apisLikedDataProvider yii\data\ActiveDataProvider */

$columns = [
	[
		'attribute' => 'name',
		'value'=>function ($model, $key, $index, $widget) {
			return Html::a($model->name, ['/apis/view', 'id' => $model->id]);
		},
		'format'=> 'raw',
		'hAlign' => GridView::ALIGN_CENTER
	],
	//'resource_url:url',
	[
		'attribute' => '',
		'label' => 'Likes',
		'value'=>function ($model, $key, $index, $widget) {
			return
				"<span class='glyphicon glyphicon-thumbs-up'> </span>" .
					$model->likes .
				' / ' .
				"<span class='glyphicon glyphicon-thumbs-down'> </span>" .
				$model->dislikes;
		},
		'format'=>'raw',
		'hAlign' => GridView::ALIGN_CENTER
	],
//	[
//		'attribute' => '',
//		'value'=>function ($model, $key, $index, $widget) {
//			return "<span class='glyphicon glyphicon-thumbs-down'> </span>" .
//			$model->dislikes;
//		},
//		'format'=>'raw',
//	],
	//'used',
//	[
//		'label' => 'author',
//		'value' =>
//	],
	[
		'attribute' => 'createdBy.username',
		'hAlign' => GridView::ALIGN_CENTER
	]
];

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Welcome to the OPENi API Builder!</h1>

        <p class="lead">Create, use and recommend your favorite API with immediate connection to Cloud Based Services.</p>
    </div>

    <div class="body-content text-center">

		<?php
			echo Select2::widget([
				'model' => $apisModel,
				'attribute' => 'name',
				'data' => array_merge(["" => ""], $apisData),
				'options' => ['placeholder' => 'Search for Apis ...'],
				'pluginOptions' => [
					'allowClear' => true
				],
			]);
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
					'dataProvider' => $apisRecentDataProvider,
					'hover' => true,
					'columns' => $columns
				]); ?>
            </div>
            <div class="col-lg-6">
                <h2>Most Liked</h2>

				<?= GridView::widget([
					'dataProvider' => $apisLikedDataProvider,
					'hover' => true,
					'columns' => $columns
				]); ?>
            </div>
        </div>

    </div>
</div>
