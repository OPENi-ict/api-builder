<?php
	class JsonObject {

		private $json;

		function __construct($jsonObject) {
	    	$this->json = $jsonObject;
		}

		function returnJsonField($key) {
			if (isset($this->json[$key]))
				return $this->json[$key];
			else
				return '';
		}

		function echoJsonField($key, $cap = false, $append = '', $prepend = '') {
			$field = $this->returnJsonField($key);
			if ($cap)
				$result = ucfirst($field);
			else
				$result = $field;
			echo $prepend.$result.$append;
		}

		function echoJsonFieldURL($url, $text) {
			$url_field = $this->returnJsonField($url);
			$text_field = $this->returnJsonField($text);

			echo '<a href="'.$url_field.'">'.$text_field.'</a>';
		}
	}
?>