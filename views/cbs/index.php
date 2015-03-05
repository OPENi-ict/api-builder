<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CbsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cloud Based Services (CBS)';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cbs-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
		<?= Html::a('Create CBS', ['create'], ['class' => 'btn btn-success']) ?>
		<?php // Html::a('Propose New Version', ['propose'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= GridView::widget([
		'tableOptions' => ['class' => 'text-center'],
		'headerRowOptions' => ['class' => 'text-center'],
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],

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
				'attribute' => 'url',
				'format' => 'url',
				'hAlign' => GridView::ALIGN_CENTER,
				'vAlign' => GridView::ALIGN_MIDDLE
			],
			//'status',
			[
				'attribute' => 'status',
				'value'=>function ($model, $key, $index, $widget) {
					return
						$model->status == 'pending' ? '<span class="text-warning">pending</span>' : '<span class="text-success">approved</span>';
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
            //'created_by',

			['class' => 'kartik\grid\ActionColumn', 'controller' => 'cbs', 'template' => '{view}'],

			[
				'attribute' => '',
				'label' => 'Propose',
				'value'=>function ($model, $key, $index, $widget) {
					return
						Html::a('Propose Version', ['propose', 'id' => $model->id], ['class' => 'btn btn-primary btn-xs']);
				},
				'format'=>'raw',
				'hAlign' => GridView::ALIGN_CENTER,
				'vAlign' => GridView::ALIGN_MIDDLE
			],
        ],
    ]); ?>

</div>
