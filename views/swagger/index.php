<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<head>-->
<!--  <link href='//fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'/>-->
<!---->
<!--  <!-- enabling this will enable oauth2 implicit scope support -->
<!--  <script src='lib/swagger-oauth.js' type='text/javascript'></script>-->
<!---->
<!--</head>-->

<?php

$this->title = 'Swagger UI';
?>

<div class="swagger-section">
	<div id='header'>
	  <div class="swagger-ui-wrap">
		<a id="logo" href="http://swagger.wordnik.com">swagger</a>
		<form id='api_selector'>
<!--		  <div class='input icon-btn'>-->
<!--			<img id="show-pet-store-icon" src="../../web/images/pet_store_api.png" title="Show Swagger Petstore Example Apis">-->
<!--		  </div>-->
<!--		  <div class='input icon-btn'>-->
<!--			<img id="show-wordnik-dev-icon" src="../../web/images/wordnik_api.png" title="Show Wordnik Developer Apis">-->
<!--		  </div>-->
		  <div class='input'><input placeholder="http://localhost/api-builder/web/apis/Core/api-docs.json" id="input_baseUrl" name="baseUrl" type="text"/></div>
<!--		  <div class='input'><input placeholder="api_key" id="input_apiKey" name="apiKey" type="text"/></div>-->
		  <div class='input'><a id="explore" href="#">Explore</a></div>
		</form>
	  </div>
	</div>

	<div id="message-bar" class="swagger-ui-wrap">&nbsp;</div>
	<div id="swagger-ui-container" class="swagger-ui-wrap"></div>
</div>
