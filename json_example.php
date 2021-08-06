<?php
// NOTE: there's a syntax error in the JSON (trailing comma)
$json = <<<EOT
{
	"first":"Fred",
	"last":"Flintstone",
	"city":"Bedrock",
}
EOT;
try {
	$obj = json_decode(json: $json, flags: JSON_THROW_ON_ERROR);
	if ($code = json_last_error()) {
		echo json_last_error_msg();
		echo "\n";
	}
} catch (JsonException $j) {
	echo $j;
}
var_dump($obj);

// output:
/*
 * JsonException: Syntax error in /home/vagrant/php-ii-jun-2021/json_example.php:10
 * etc.
 */

