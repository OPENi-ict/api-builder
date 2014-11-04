<?php

use kartik\widgets\Select2;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $resourcesModel \app\models\Resources */
/* @var $resourcesData array */
/* @var $searchModel app\models\ResourcesSearch */
/* @var $resourcesUsedDataProvider yii\data\ActiveDataProvider */
/* @var $resourcesRecentDataProvider yii\data\ActiveDataProvider */
/* @var $resourcesLikedDataProvider yii\data\ActiveDataProvider */

$columns = [
	[
		'attribute' => 'resource_name',
		'value'=>function ($model, $key, $index, $widget) {
			return "<a href='$model->resource_url'>$model->resource_name</a>";
		},
		'format'=> 'raw',
	],
	//'resource_url:url',
	[
		'attribute' => '',
		'value'=>function ($model, $key, $index, $widget) {
			return "<span class='glyphicon glyphicon-thumbs-up'> </span>" .
			$model->likes;
		},
		'format'=>'raw',
	],
	[
		'attribute' => '',
		'value'=>function ($model, $key, $index, $widget) {
			return "<span class='glyphicon glyphicon-thumbs-down'> </span>" .
			$model->dislikes;
		},
		'format'=>'raw',
	],
	'used',
	'author'
];

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Welcome to the OPENi API Builder!</h1>

        <p class="lead">Create, use and recommend your favorite API with immediate connection to Cloud Based Services.</p>
    </div>

    <div class="body-content">

		<?php
			echo Select2::widget([
				'model' => $resourcesModel,
				'attribute' => 'resource_name',
				'data' => array_merge(["" => ""], $resourcesData),
				'options' => ['placeholder' => 'Search for Objects ...'],
				'pluginOptions' => [
					'allowClear' => true
				],
			]);
		?>
        <div class="row text-center">
            <div class="col-lg-4">
                <h2>Most Used</h2>

				<?= GridView::widget([
					'dataProvider' => $resourcesUsedDataProvider,
					'hover' => true,
					'columns' => $columns
				]); ?>
            </div>
            <div class="col-lg-4">
                <h2>Most Recent</h2>

				<?= GridView::widget([
					'dataProvider' => $resourcesRecentDataProvider,
					'hover' => true,
					'columns' => $columns
				]); ?>
            </div>
            <div class="col-lg-4">
                <h2>Most Liked</h2>

				<?= GridView::widget([
					'dataProvider' => $resourcesLikedDataProvider,
					'hover' => true,
					'columns' => $columns
				]); ?>
            </div>
        </div>

    </div>
</div>
