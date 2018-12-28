<?php

// unpack our $data array
foreach($data as $name => $value){
    $$name = $value;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo SITENAME  ?></title>
<!-- Favicons -->
<link rel="shortcut icon" href="img/favicon.ico">
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/front/css/font-awesome.min.css">
    <!-- Ionicons css -->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/front/css/ionicons.min.css">
    <!-- Nice select css -->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/front/css/nice-select.css">
    <!-- Jquery fancybox css -->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/front/css/jquery.fancybox.css">
    <!-- Jquery ui price slider css -->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/front/css/jquery-ui.min.css">
    <!-- Meanmenu css -->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/front/css/meanmenu.min.css">
    <!-- Nivo slider css -->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/front/css/nivo-slider.css">
    <!-- Owl carousel css -->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/front/css/owl.carousel.min.css">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/front/css/bootstrap.min.css">
    <!-- Custom css -->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/front/css/default.css">
    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/front/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/front/css/responsive.css">

    <!-- Modernizer js -->
    <script src="<?php echo URLROOT ?>/front/js/vendor/modernizr-3.5.0.min.js"></script>
   
    <!-- /custom JS files to be developed and maintained -->

    <?php
    if (isset($basehref)){
        echo "<base href='$basehref'>";
    }
    ?>

</head>
<body>
    <!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

    <!-- Main Wrapper Start Here -->
    <div class="wrapper">
       <!-- Newsletter Popup Start --
        <div class="popup_wrapper">
            <div class="test">
                <span class="popup_off">Close</span>
                <div class="subscribe_area text-center mt-60">
                    <h2>Newsletter</h2>
                    <p>Subscribe to the Volga mailing list to receive updates on new arrivals, special offers and other discount information.</p>
                    <div class="subscribe-form-group">
                        <form action="#">
                            <input autocomplete="off" type="text" name="message" id="message" placeholder="Enter your email address">
                            <button type="submit">subscribe</button>
                        </form>
                    </div>
                    <div class="subscribe-bottom mt-15">
                        <input type="checkbox" id="newsletter-permission">
                        <label for="newsletter-permission">Don't show this popup again</label>
                    </div>
                </div>
            </div>
        </div>-->
