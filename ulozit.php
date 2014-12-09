<?php 

$payload = file_get_contents('php://input');
$data = json_decode($payload, true);
file_put_contents(
	"data.txt", 
	date('H:i:s') . " - " .  $data['data'] . "\n", 
	FILE_APPEND
);