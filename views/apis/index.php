<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ApisSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Apis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apis-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Apis', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
			[
				'attribute' => 'name',
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
			//'updatedBy.username',
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
			//'updated_at:date',

			['class' => 'kartik\grid\ActionColumn'],

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

			// 'proposed',
			// 'published',
			// 'privacy',
		],
    ]); ?>

</div>
