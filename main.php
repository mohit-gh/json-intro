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

?>
