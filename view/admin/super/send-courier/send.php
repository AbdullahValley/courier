<?php
include_once '../../../../vendor/autoload.php';

/* Cost Generate Start */

$data=implode(",",$_POST['category']);
$data = explode(",",$data);

$data1 = $data[0];
$data2 = $data[1];

$_POST['category_id'] = $data1;
$_POST['category_price'] = $data2;

$_POST['cost'] = $data2*($_POST['quantity']);

/* Cost Generate End */

//var_dump($_POST['category_id']);

$send = new \CMS\admin\super\send();

$send=$send->set($_POST)->send();