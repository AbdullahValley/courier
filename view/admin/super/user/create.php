<?php
include_once '../../../../vendor/autoload.php';

$user = new \CMS\admin\super\user();

$_POST['user_image'] = $user->upload_img();

$user->set($_POST)->store();





