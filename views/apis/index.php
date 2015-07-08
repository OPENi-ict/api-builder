<?php

use kartik\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ApisSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $category app\models\Categories */

$this->title = 'Apis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apis-index">

    <?php if($category): ?>
        <h1><?= Html::encode($category->name) . ' ' . Html::encode($this->title) ?></h1>
    <?php else: ?>
        <h1><?= Html::encode($this->title) ?></h1>
    <?php endif; ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Html::icon('plus', ['data' => ['toggle' => 'tooltip', 'placement' => 'right'], 'title' => 'Create Apis']), ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Read From Swagger', ['swagger/read', 'cbs' => false], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

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
					if ($model->published) {
                        return
                            Html::a('Swagger', ['swagger/', 'url' => $model->name], ['class' => 'btn btn-primary btn-xs']);
                    }
					else {
                        return
                            Html::a('Not yet Published', ['/'], ['class' => 'btn btn-primary btn-xs disabled']);
                    }
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
