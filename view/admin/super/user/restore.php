<?php
include_once '../../../../vendor/autoload.php';

$restore = new \CMS\admin\super\user();

$restore->restore($_GET['id']);
