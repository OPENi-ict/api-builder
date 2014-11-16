<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Objects */
/* @var $api app\models\Apis */

$this->title = 'Use or Extend Existing Object';
$this->params['breadcrumbs'][] = ['label' => 'Apis', 'url' => ['apis/index']];
$this->params['breadcrumbs'][] = ['label' => $api->name, 'url' => ['apis/view', 'id' => $api->id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="objects-duplicate">

	<h1><?= Html::encode($this->title) ?></h1>

	<?= $this->render('_formUse', [
		'model' => $model,
	]) ?>

</div>
