<?php
header('Content-Type: application/json; charset=UTF-8');
$arr = array('Name'=>'Mohit','Age'=>24,'Profile'=>'PHP');

echo json_encode($arr);

class myclass {
	public $currentcompany;
	public $sal;
	public $desig;
}

$emp = new myclass();
$emp->currentcompany = 'ABC';
$emp->sal = 50000;
$emp->desig = 'Drupal Developer';

echo json_encode($emp);
echo "<br>";
$json_data = '{"pc":"swinn","cc":"tmi","nc":11}';
$json_decoded = json_decode($json_data);
echo "<pre>";
var_dump($json_decoded);
echo "</pre>";
echo $json_decoded->pc;

?>
