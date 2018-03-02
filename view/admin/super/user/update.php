<?php
include_once '../../../../vendor/autoload.php';

$user = new \CMS\admin\super\user();

if(!empty($_FILES['user_image']['name'])){
    if(isset($_POST['user_image'])){
        unlink('../../../../assets/admin/images/uploads/'.$_POST['user_image']);
    }
}

$_POST['user_image'] = $user->upload_img();

$user->set($_POST)->update();