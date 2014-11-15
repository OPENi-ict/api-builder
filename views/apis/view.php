<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Apis */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Apis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apis-view">

	<h1><?= Html::encode($this->title) ?></h1>
	<h4><?= Html::encode($model->description) ?></h4>

	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<p>
		<?= Html::a('Create Objects', ['createobject', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
	</p>

	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		//'filterModel' => $searchModel,
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],

			'objects0.id',
            'objects0.name',
            'objects0.description',
            'objects0.api',
            'objects0.inherited',
			'id',
			'name',
			'description',
			'version',
			'objects',
			'createdBy.username',
			'updatedBy.username',
			'likes',
			'dislikes',
			'created_at:date',
			'updated_at:date',

			['class' => 'yii\grid\ActionColumn'],
		],
	]); ?>

</div>
