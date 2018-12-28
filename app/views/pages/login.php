<?php

/*
 * here we might have $data, we might not. For this example,
 * we probably have "message" as an array key in $data.
 */


require 'includes/header.php'  ?>

<body class="navbar-bottom login-container" style="margin-top:70px; background-image:url('<?php echo URLROOT ?>/ldb/images/backgrounds/login.jpg')">

<!-- Main navbar
<div class="navbar navbar-inverse bg-indigo">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.html"><span style="font-weight:bold; font-size:16px"> LFB DATENBANK  <span></a>

        <ul class="nav navbar-nav pull-right visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">

    </div>
</div>-->
<!-- /main navbar -->


<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper" style="">

            <!-- Simple login form -->
            <form method="post" action="/ldb/data/login">

                <div class="panel panel-body login-form" style="opacity: 0.8">
                    <div class="text-center">



                        <div class="text-semibold" style="font-size: 2.4em;"><img width="120" src="<?php echo URLROOT ?>/ldb/images/mfc-logo.png" class="img-polaroid img-responsives" alt=""></div>
                        <h5 class="content-group">  <small class="display-block">Enter your credentials below</small></h5>
                    </div>
                    <?php
                    if (isset($data['message'])) {
                        ?>
                        <div class="alert alert-danger no-border">
                            <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
                            <span class="text-semibold">Error!</span> <?php echo $data['message'] ?>
                        </div>

                    <?php } ?>
                    <div class="form-group has-feedback has-feedback-left">
                        <input type="text" name='email'class="form-control" placeholder="Email">
                        <div class="form-control-feedback">
                            <i class="icon-user text-muted"></i>
                        </div>
                    </div>

                    <div class="form-group has-feedback has-feedback-left">
                        <input type="password" name='password' class="form-control" placeholder="Password">
                        <div class="form-control-feedback">
                            <i class="icon-lock2 text-muted"></i>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" name='login'class="btn btn-block" style="background: #294C98; color: white">Sign in <i class="icon-circle-left2 position-right"></i></button>
                        <a href="#">Forgot password?</a>
                    </div>

                    <div class="text-center">

                        <div class="content-divider text-muted form-group"><span>LFB DATENBANK &copy; 2018</span></div>
                        <div></div>
                    </div>
                </div>
            </form>
            <!-- /simple login form -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->




</body>


</html>
