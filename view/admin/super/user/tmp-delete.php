<?php

include_once '../../../../vendor/autoload.php';

$delete = new CMS\admin\super\user();
$delete = $delete->tmp_delete($_POST['id']);
