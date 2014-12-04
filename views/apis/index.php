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
		//'tableOptions' => array('style' => 'text-align: center;'),
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            'description',
            'version',
			'createdBy.username',
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
				'hAlign' => GridView::ALIGN_CENTER
			],
			'created_at:date',
			//'updated_at:date',

			['class' => 'kartik\grid\ActionColumn'],

			[
				'attribute' => '',
				'label' => 'Swagger Page',
				'value'=>function ($model, $key, $index, $widget) {
					return
						Html::a('Swagger <img src="./images/logo_small.png"/>', ['swagger/', 'url' => $model->name], ['class' => 'btn btn-primary btn-xs']);
				},
				'format'=>'raw',
				'hAlign' => GridView::ALIGN_CENTER
			],
		],
    ]); ?>

</div>
