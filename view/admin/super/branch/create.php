<?php
include "../../../../vendor/autoload.php";
$branch=new \CMS\admin\super\branch();
$branch=$branch->set($_POST)->store();