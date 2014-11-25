<?php

use yii\helpers\Html;
use yii\grid\GridView;

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
		'filterModel' => $searchModel,
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],

			//'id',
			'name',
			'description',
			'api0.name',
			'inherited0.name',
			'privacy',
			// 'methods:ntext',
			'createdBy.username',
			// 'updated_by',
			'created_at:date',
			// 'updated_at',
			'votes_up',
			'votes_down',

			['class' => 'yii\grid\ActionColumn'],
		],
	]); ?>

</div>
