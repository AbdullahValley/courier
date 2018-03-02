<?php
 include_once '../../../../vendor/autoload.php';
$page = new \CMS\admin\super\page();
   $page->set($_POST)->store();
