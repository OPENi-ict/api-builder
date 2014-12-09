<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

	<ul>
		<li>
			<h3>Browse APIs, Objects and their Properties</h3>
			<p>You can browse existing APIs, view their Objects and modify their properties.</p>
		</li>
		<li>
			<h3>Create new APIs-Objects-Properties</h3>
			<p>You can create new APIs, new Objects or duplicate existing ones and use their properties.</p>
		</li>
		<li>
			<h3>Browse the Cloud Based Services</h3>
			<p>Browse the currently implemented CBS along with their details.</p>
		</li>
		<li>
			<h3>Create new CBS</h3>
			<p>Create new CBS or propose new versions or url for the currently implemented ones.</p>
		</li>
		<li>
			<h3>Publish the Swagger for the API</h3>
			<p>Select the methods you need to implement along with the CBS you want associated and publish the Swagger for your API.</p>
		</li>
		<li>
			<h3>Propose an API for Approval</h3>
			<p>When you see your API get upvoted, propose for it to be included in the core API platform.</p>
		</li>
	</ul>

</div>
