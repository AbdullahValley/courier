<?php include_once('../inc/header.php'); ?>

            <!-- Content Wrapper -->
            <article> 


                <!-- Calculate Your Cost -->
                <section class="calculate pt-100">
                    <div class="theme-container container">  
                        <!--<span class="bg-text right wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> calculate </span> -->
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <img src="assets/front/img/block/Courier-Man.png" alt="" class="wow slideInLeft" data-wow-offset="50" data-wow-delay=".20s" />
                            </div>
                            <div class="col-md-6">   
                                <div class="pad-10"></div>
                                <h2 class="section-title pb-10 wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" > Now Registration...</h2>
                                <p class="fs-16 wow fadeInUp" data-wow-offset="50" data-wow-delay=".25s">Please fillup your personal information..</p>
                                <div class="calculate-form">
                                    <form class="row" action="" method="POST" enctype="multipart/form-data">
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2"> Your Email: </label></div>
                                            <div class="col-sm-9"> <input data-bind="in:value, f: float" data-name="height" type="text" placeholder="" class="form-control"> </div>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2"> Your Password: </label></div>
                                            <div class="col-sm-9"> <input data-bind="in:value, f: float" data-name="width" type="text" placeholder="" class="form-control"> </div>
                                        </div>
										<div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2">Confarm Your Password: </label></div>
                                            <div class="col-sm-9"> <input data-bind="in:value, f: float" data-name="width" type="text" placeholder="" class="form-control"> </div>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2"> Your Name: </label></div>
                                            <div class="col-sm-9"> <input data-bind="in:value, f: float" data-name="depth" type="text" placeholder="" class="form-control"> </div>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2"> Your Mobile: </label></div>
                                            <div class="col-sm-9"> <input data-bind="in:value, f: float" data-name="weight" type="text" placeholder="" class="form-control"> </div>
                                        </div>
										<div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2"> Your Date of Birth: </label></div>
                                            <div class="col-sm-9"> <input name="date_of_birth" required  data-bind="in:value, f: float" data-name="weight" type="date" placeholder="" class="form-control"> </div>
                                        </div>
										<div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2"> Your Date of Birth: </label></div>
                                            <div class="col-sm-9"> <input data-bind="in:value, f: float" data-name="weight" type="text" placeholder="" class="form-control"> </div>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2"> location: </label></div>
                                            <div class="col-sm-9"> 
                                                <div class="col-sm-6 no-pad">
                                                    <input type="text" data-bind="in:value" data-name="locations[from]" placeholder="From" class="form-control from fw-600">
                                                </div>
                                                <div class="col-sm-6 no-pad">
                                                    <input type="text" data-bind="in:value" data-name="locations[to]" placeholder="To" class="form-control to fw-600">
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2"> Package: </label></div>
                                            <div class="col-sm-9"> 
                                                <div class="form-group">
                                                    <select data-bind="in:value" data-name="package" class="selectpicker form-control" data-live-search="true" data-width="100%"
                                                            data-toggle="tooltip" title="select your package">
                                                        <option value="cost">Usual Delivery</option>
                                                        <option value="cost + 25">Fastest Delivery: + $25</option>
                                                        <option value="cost*0.9">Discount Delivery: -10%</option>
                                                    </select>
                                                </div>                                           
                                            </div>                                        
                                        </div>                                    
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-9 col-xs-12 pull-right"> 
                                                <div class="btn-1"> <span> Total Cost: </span>
                                                    <span data-bind="out:price, f:currency" data-name="cost" class="btn-1 dark">
                                                        <span class="pr-sign">-&nbsp;</span> $<span class="pr-wrap" style="display: none;"><span class="pr">0</span></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="pt-80 hidden-lg"></div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.Calculate Your Cost -->

                
            </article>
            <!-- /.Content Wrapper -->


<?php include_once('../inc/footer.php'); ?>