<?php
require("includes/header.php");
?>

<body>
    <!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

    <!-- Main Wrapper Start Here -->
    <div class="wrapper white-bg">
        <!-- Main Header Area Start Here -->
      
        <!-- Main Header Area End Here -->
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-area mt-30">
            <div class="container">
                <div class="breadcrumb">
                    
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Breadcrumb End -->
        <!-- LogIn Page Start -->
        <div class="log-in ptb-45">
            <div class="container">
                <div class="row">
                    <!-- New Customer Start -->
                    <div class="col-md-3">
                       
                    </div>
                    <!-- New Customer End -->
                    <!-- Returning Customer Start -->
                    <div class="col-md-6">
                        <div class="well">
                            <div class="return-customer">
                                <h3 class="mb-10 custom-title">Back office</h3>
                                <p class="mb-10"><strong>Login to continue</strong></p>
                                <form action="#">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" placeholder="Enter your email address..." id="input-email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="text" name="pass" placeholder="Password" id="input-password" class="form-control">
                                    </div>
                                    <p class="lost-password"><a href="forgot-password.html">Forgot password?</a></p>
                                    <input type="submit" value="Login" class="return-customer-btn">
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Returning Customer End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- LogIn Page End -->
        <!-- Signup Newsletter Start -->
     
        <!-- Signup-Newsletter End -->
        <!-- Footer Area Start Here -->
    
        <!-- Footer Area End Here -->
    </div>
    <!-- Main Wrapper End Here -->

   <?php
 require 'includes/footer.php';
 ?>
</body>

</html>