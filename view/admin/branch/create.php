<?php
include_once '../../../vendor/autoload.php';
$branch=new \CMS\admin\super\branch();
$branch->set($_POST)->store();
