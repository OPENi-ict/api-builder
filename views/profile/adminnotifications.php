<?php

use kartik\grid\GridView;
use yii\helpers\Html;

/* @var $proposedAPIsModel yii\data\ActiveDataProvider */
/* @var $proposedCBSModel yii\data\ActiveDataProvider */
/* @var $fUAModel yii\data\ActiveDataProvider */
/* @var $fUUModel yii\data\ActiveDataProvider */

$this->title = 'Administrator Notifications';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="user-view">

	<h1><?= Html::encode($this->title) ?></h1>

	<h3>Proposed APIs</h3>

	<?= GridView::widget([
		'dataProvider' => $proposedAPIsModel,
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],
			[
				'attribute' => 'name',
				'value'=>function ($model, $key, $index, $widget) {
					return Html::a($model->name, ['apis/view', 'id' => $model->id]);
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
				'attribute' => 'version',
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
				'attribute' => '',
				'label' => 'Votes',
				'value'=>function ($model, $key, $index, $widget) {
					return
						Html::a($model->votes_up, ['apis/voteup', 'id' => $model->id], ['class' => 'glyphicon glyphicon-thumbs-up nounderline'])
						.
						' / ' .
						Html::a($model->votes_down, ['apis/votedown', 'id' => $model->id], ['class' => 'glyphicon glyphicon-thumbs-down nounderline']);
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
			],
			[
				'attribute' => '',
				'label' => 'Swagger Page',
				'value'=>function ($model, $key, $index, $widget) {
					if ($model->published)
						return
							Html::a('Swagger', ['swagger/', 'url' => $model->name], ['class' => 'btn btn-primary btn-xs']);
					else
						return
							Html::a('Not yet Published', ['/'], ['class' => 'btn btn-primary btn-xs disabled']);
				},
				'format'=>'raw',
				'hAlign' => GridView::ALIGN_CENTER,
				'vAlign' => GridView::ALIGN_MIDDLE
			],
			[
				'attribute' => '',
				'label' => 'Accept',
				'value'=>function ($model, $key, $index, $widget) {
					return
						Html::a('Accept', ['acceptapi', 'id' => $model->id], ['class' => 'btn btn-primary btn-xs']);
				},
				'format'=>'raw',
				'hAlign' => GridView::ALIGN_CENTER,
				'vAlign' => GridView::ALIGN_MIDDLE
			],
		],
	]); ?>

	<h3>Proposed CBS</h3>

	<?= GridView::widget([
		'tableOptions' => ['class' => 'text-center'],
		'headerRowOptions' => ['class' => 'text-center'],
		'dataProvider' => $proposedCBSModel,
		'columns' => [
			['class' => 'kartik\grid\SerialColumn'],
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
				'attribute' => 'version',
				'hAlign' => GridView::ALIGN_CENTER,
				'vAlign' => GridView::ALIGN_MIDDLE
			],
			[
				'attribute' => 'url',
				'format' => 'url',
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
			[
				'attribute' => '',
				'label' => 'Accept',
				'value'=>function ($model, $key, $index, $widget) {
					return
						Html::a('Accept', ['acceptcbs', 'id' => $model->id], ['class' => 'btn btn-primary btn-xs']);
				},
				'format'=>'raw',
				'hAlign' => GridView::ALIGN_CENTER,
				'vAlign' => GridView::ALIGN_MIDDLE
			],
		],
	]); ?>

	<h3>Followed API changes</h3>

	<?= GridView::widget([
		'dataProvider' => $fUAModel,
		'columns' => [
			[
				'label' => 'API',
				'value'=>function ($model, $key, $index, $widget) {
					return
						Html::a($model->api0->name, ['apis/', 'id' => $model->api0->id]);
				},
				'format'=>'raw',
				'hAlign' => GridView::ALIGN_CENTER,
				'vAlign' => GridView::ALIGN_MIDDLE
			],
			[
				'label' => 'Name',
				'value'=>function ($model, $key, $index, $widget) {
					if ($model->changed_name)
						return 'The API name has changed from '.$model->changed_name_old_name.' to '.$model->api0->name;
					else
						return 'No changes';
				},
				'format'=>'raw',
				'hAlign' => GridView::ALIGN_CENTER,
				'vAlign' => GridView::ALIGN_MIDDLE
			],
			[
				'label' => 'Description',
				'value'=>function ($model, $key, $index, $widget) {
					if ($model->changed_descr)
						return 'The API description has changed';
					else
						return 'No changes';
				},
				'format'=>'raw',
				'hAlign' => GridView::ALIGN_CENTER,
				'vAlign' => GridView::ALIGN_MIDDLE
			],
			[
				'label' => 'Version',
				'value'=>function ($model, $key, $index, $widget) {
					if ($model->changed_version)
						return 'The API version has changed to '.$model->api0->version;
					else
						return 'No changes';
				},
				'format'=>'raw',
				'hAlign' => GridView::ALIGN_CENTER,
				'vAlign' => GridView::ALIGN_MIDDLE
			],
			[
				'label' => 'Up Votes',
				'value'=>function ($model, $key, $index, $widget) {
					if ($model->changed_upvotes > 0)
						if ($model->changed_upvotes > 1)
							return $model->changed_upvotes.' new Up Votes';
						else
							return '1 new Up Vote';
					else
						return 'No changes';
				},
				'format'=>'raw',
				'hAlign' => GridView::ALIGN_CENTER,
				'vAlign' => GridView::ALIGN_MIDDLE
			],
			[
				'label' => 'Down Votes',
				'value'=>function ($model, $key, $index, $widget) {
					if ($model->changed_downvotes)
						if ($model->changed_downvotes > 1)
							return $model->changed_downvotes.' new Down Votes';
						else
							return '1 new Down Vote';
					else
						return 'No changes';
				},
				'format'=>'raw',
				'hAlign' => GridView::ALIGN_CENTER,
				'vAlign' => GridView::ALIGN_MIDDLE
			],
			[
				'label' => 'Proposed',
				'value'=>function ($model, $key, $index, $widget) {
					if ($model->changed_proposed)
						return 'The API has been proposed';
					else
						return 'No changes';
				},
				'format'=>'raw',
				'hAlign' => GridView::ALIGN_CENTER,
				'vAlign' => GridView::ALIGN_MIDDLE
			],
			[
				'label' => 'Published',
				'value'=>function ($model, $key, $index, $widget) {
					if ($model->changed_published)
						return 'The API has been published';
					else
						return 'No changes';
				},
				'format'=>'raw',
				'hAlign' => GridView::ALIGN_CENTER,
				'vAlign' => GridView::ALIGN_MIDDLE
			],
			[
				'label' => 'Privacy',
				'value'=>function ($model, $key, $index, $widget) {
					if ($model->changed_privacy)
						return 'The API has new privacy policy';
					else
						return 'No changes';
				},
				'format'=>'raw',
				'hAlign' => GridView::ALIGN_CENTER,
				'vAlign' => GridView::ALIGN_MIDDLE
			],
			[
				'label' => 'Objects',
				'value'=>function ($model, $key, $index, $widget) {
					if ($model->changed_objects_number)
						if ($model->changed_objects_number > 1)
							return $model->changed_objects_number.' new Objects were added';
						else
							return '1 new Object was added';
					else
						return 'No changes';
				},
				'format'=>'raw',
				'hAlign' => GridView::ALIGN_CENTER,
				'vAlign' => GridView::ALIGN_MIDDLE
			]
		]
	]); ?>

	<?= Html::a('Clear API Notifications', ['clearapinotifs'], ['class' => 'btn btn-warning']) ?>

	<h3>Followed User changes</h3>

	<?= GridView::widget([
		'dataProvider' => $fUUModel,
		'columns' => [
			[
				'label' => 'User',
				'value'=>function ($model, $key, $index, $widget) {
					return
						Html::a($model->followee0->username, ['profile/view', 'id' => $model->followee0->id]);
				},
				'format'=>'raw',
				'hAlign' => GridView::ALIGN_CENTER,
				'vAlign' => GridView::ALIGN_MIDDLE
			],
			[
				'label' => 'Photo',
				'value'=>function ($model, $key, $index, $widget) {
					if ($model->changed_photo)
						return 'New Profile Pic';
					else
						return 'No changes';
				},
				'format'=>'raw',
				'hAlign' => GridView::ALIGN_CENTER,
				'vAlign' => GridView::ALIGN_MIDDLE
			],
			[
				'label' => 'LinkedIn',
				'value'=>function ($model, $key, $index, $widget) {
					if ($model->changed_linkedin)
						return 'Updated LinkedIn Profile @ '.Html::a($model->followee0->linkedin, 'https://www.linkedin.com/in/' . $model->followee0->linkedin, ['target' => 'blank']);
					else
						return 'No changes';
				},
				'format'=>'raw',
				'hAlign' => GridView::ALIGN_CENTER,
				'vAlign' => GridView::ALIGN_MIDDLE
			],
			[
				'label' => 'Github',
				'value'=>function ($model, $key, $index, $widget) {
					if ($model->changed_github)
						return 'Updated Github Profile @ '.Html::a($model->followee0->github, 'https://www.github.com/' . $model->followee0->github, ['target' => 'blank']);
					else
						return 'No changes';
				},
				'format'=>'raw',
				'hAlign' => GridView::ALIGN_CENTER,
				'vAlign' => GridView::ALIGN_MIDDLE
			],
			[
				'label' => 'New API',
				'value'=>function ($model, $key, $index, $widget) {
					if (($model->created_api != null) || ($model->created_api != ''))
						return 'Has created a new API';
					else
						return 'No changes';
				},
				'format'=>'raw',
				'hAlign' => GridView::ALIGN_CENTER,
				'vAlign' => GridView::ALIGN_MIDDLE
			],
			[
				'label' => 'Up Votes',
				'value'=>function ($model, $key, $index, $widget) {
					if ($model->changed_upvotes_apis != null)
						return 'Has Upvoted an API';
					else
						return 'No changes';
				},
				'format'=>'raw',
				'hAlign' => GridView::ALIGN_CENTER,
				'vAlign' => GridView::ALIGN_MIDDLE
			],
			[
				'label' => 'Down Votes',
				'value'=>function ($model, $key, $index, $widget) {
					if ($model->changed_downvotes_apis != null)
						return 'Has Downvoted an API';
					else
						return 'No changes';
				},
				'format'=>'raw',
				'hAlign' => GridView::ALIGN_CENTER,
				'vAlign' => GridView::ALIGN_MIDDLE
			]
		]
	]); ?>

	<?= Html::a('Clear User Notifications', ['clearusernotifs'], ['class' => 'btn btn-warning']) ?>

</div>