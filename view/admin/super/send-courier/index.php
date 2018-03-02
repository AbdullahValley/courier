<?php
include_once '../../include/head.php';
include_once '../../../../vendor/autoload.php';

$send = new \CMS\admin\super\send();

$user = $send->getUser();

$branch = $send->getBranch();

$category = $send->getCategory();


?>

    <body class="nav-md">
<div class="container body">
    <div class="main_container">

<?php include_once '../../include/left-column.php'; ?>


    <!-- top navigation -->
    <div class="top_nav">
        <div class="nav_menu">
            <nav>
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>

                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <img src="../../../../assets/admin/images/img.jpg" alt="">Abdullah
                            <span class=" fa fa-angle-down"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-usermenu pull-right">
                            <li><a href="javascript:;"> Profile</a></li>
                            <li>
                                <a href="javascript:;">
                                    <span class="badge bg-red pull-right">50%</span>
                                    <span>Settings</span>
                                </a>
                            </li>
                            <li><a href="javascript:;">Help</a></li>
                            <li><a href="#"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                        </ul>
                    </li>

                    <li role="presentation" class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-green">6</span>
                        </a>
                        <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                            <li>
                                <a>
                                    <span class="image"><img src="../../../../assets/admin/images/img.jpg" alt="Profile Image" /></span>
                                    <span>
                          <span>Abdullah</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                    <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <span class="image"><img src="../../../../assets/admin/images/img.jpg" alt="Profile Image" /></span>
                                    <span>
                          <span>Abdullah</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                    <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <span class="image"><img src="../../../../assets/admin/images/img.jpg" alt="Profile Image" /></span>
                                    <span>
                          <span>Abdullah</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                    <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <span class="image"><img src="../../../../assets/admin/images/img.jpg" alt="Profile Image" /></span>
                                    <span>
                          <span>Abdullah</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                    <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                </a>
                            </li>
                            <li>
                                <div class="text-center">
                                    <a>
                                        <strong>See All Alerts</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- /top navigation -->

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Courier Details</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">

                <div class="x_panel">
                    <div class="x_title">
                        <h2>User to User SEND</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <!-- start form for validation -->
                        <form  action="send.php" id="demo-form" data-parsley-validate="" novalidate="" class="AVAST_PAM_nonloginform" enctype="multipart/form-data" method="post">



                            <div class="form-group">


                                <label for="from_user_id">FROM :: </label>
                                <select name="from_user_id" id="from_user_id" class="form-control" required="">
                                    <option value="">Choose..</option>
                                    <?php
                                    foreach ($user as $user_source){

                                        ?>


                                        <option value="<?php echo $user_source['user_id'];?>">
                                            <?php
                                            echo $user_source['user_name']." ".$user_source['user_mobile'];
                                            ?>
                                        </option>


                                    <?php } ?>

                                </select>

                                <br>







                            </div>








                            <div class="form-group">
                            <label for="source_branch_id">Source Branch :: </label>
                            <select name="source_branch_id" id="source_branch_id" class="form-control" required="">
                                <option value="">Choose..</option>
                                <?php

                                foreach ($branch as $branch_source){

                                    ?>



                                    <option value="<?php echo $branch_source['branch_id'];?>">
                                        <?php
                                        echo $branch_source['branch_name'];
                                        ?>
                                    </option>


                                <?php } ?>

                            </select>
                            </div>



                            <br>
                            <label for="to_user_id">TO :: </label>
                            <select name="to_user_id" id="to_user_id" class="form-control" required="">
                                <option value="">Choose..</option>
<?php
                               foreach ($user as $user_destination){

                                    ?>


                                    <option value="<?php echo $user_destination['user_id'];?>">
                                        <?php
                                        echo $user_destination['user_name']." ".$user_destination['user_mobile'];
                                        ?>
                                    </option>


                                <?php } ?>

                            </select>

                            <br>







                            <label for="destination_branch_id">Destination Branch</label>
                            <select  name="destination_branch_id" id="destination_branch_id" class="form-control" required="">
                                <option value="">Choose..</option>
<?php
                                foreach ($branch as $branch_destination){

                                    ?>



                                    <option value="<?php echo $branch_destination['branch_id'];?>">
                                        <?php
                                        echo $branch_destination['branch_name'];
                                        ?>
                                    </option>


                                <?php } ?>

                            </select>
                            <br>




                            <label for="address">Details Address : </label>
                            <textarea id="address" required="required" class="form-control" name="address" data-parsley-trigger="keyup" data-parsley-minlength="5" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>




                            <br>
                            <label for=" category_id">Courier Category</label>
                            <select name="category[]" about="" id="category_id" class="form-control" required="">

                                <option value="">Choose..</option>
                                <?php
                                 foreach ($category as $category){

                                    ?>

  <option value="<?php echo $category['category_id'].','.$category['category_price'];?>">
                                        <?php
                                        echo $category['category_name']." ".$category['category_price'];

                                        ?>
                                    </option>



                                <?php } ?>

                            </select>








                            <br>
                            <label for="quantity">Quantity</label>
                            <input type="number" id="quantity" class="form-control" name="quantity" required="">




                            <br>
                            <button type="submit" class="btn btn-success">Send</button>

                        </form>

                    </div>
                </div>
            </div>






        </div>
    </div>
    <!-- /page content -->

    <!-- footer content -->

<?php include_once '../../include/footer.php'; ?>