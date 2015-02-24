<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

	<?= DetailView::widget([
		'model' => $model,
		'attributes' => [
			'email:email',
			'created_at:date',
			'votes_up_apis:ntext',
			'votes_down_apis:ntext',
			'votes_up_objects:ntext',
			'votes_down_objects:ntext',
			'votes_up_comments:ntext',
			'votes_down_comments:ntext',
		],
	]) ?>

    <?php
        echo '<img src="' . $model->getImage()->getUrl('120') . '">';
    ?>

</div>
