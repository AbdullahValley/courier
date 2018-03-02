<?php

include_once '../../../../vendor/autoload.php';

$delete = new \CMS\admin\super\user();

$delete->img_delete($_POST['id']);

$delete->delete($_POST['id']);