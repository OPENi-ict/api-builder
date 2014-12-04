<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CbsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cloud Based Services';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cbs-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create CBS', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],

            //'id',
            'name',
            'description',
            'version',
            'url:url',
            'status',
            //'created_by',
			'createdBy.username',
            'created_at:date',

            ['class' => 'kartik\grid\ActionColumn'],
        ],
    ]); ?>

</div>
