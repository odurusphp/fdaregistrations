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
