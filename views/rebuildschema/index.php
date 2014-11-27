<?php

use yii\helpers\Html;

$this->title = 'Rebuild Core Schema';

?>


<p>
	<?= Html::a('Create the Database', ['models'], ['class' => 'btn btn-success']) ?>
</p>

<p>
	<?= Html::a('Create the Swagger File', ['swagger'], ['class' => 'btn btn-success']) ?>
</p>

<p>
	<?= Html::a('Publish Swagger', ['publish'], ['class' => 'btn btn-success']) ?>
</p>