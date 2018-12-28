<?php 
require ("includes/header.php");
?>


<body data-spy="scroll" data-target=".navbar-default" data-offset="100">

    <!-- Page Preloader -->

    <div id="loading-page">
        <div id="loading-center-page">
            <div id="loading-center-absolute">

                <div class="loader"></div>
            </div>
        </div>

    </div>

    <!-- Page Preloader -->


    <!-- Page Content -->


    <div class="warpper clearfix">


        <!-- Header -->

        <header class="navbar-header">

            <nav class="navbar navbar-expand-lg fixed-top">
                <div class="container">

                    <a class="navbar-brand" href="#"><img src="<?= URLROOT?>/front/images/fda-1.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon  icon_menu"></span>
                    </button>

                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a data-scroll="" class="nav-link section-scroll" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a data-scroll="" class="nav-link section-scroll" href="#about-p">About</a>
                            </li>

                            <li class="nav-item">
                                <a data-scroll="" class="nav-link section-scroll" href="#features">Features</a>
                            </li>
                            <li class="nav-item">
                                <a data-scroll="" class="nav-link section-scroll" href="#pricing">Pricing</a>
                            </li>
                            <li>
                                <a data-scroll="" href="#testimonials" class="nav-link section-scroll">Testimonials</a>
                            </li>
                            <li>
                                <a data-scroll="" href="#blog" class="nav-link section-scroll">Blog</a>
                            </li>

                            <li>
                                <div class="connect-block">
                                    <a href="#">Sign Up</a>
                                    <a href="#" class="btn btn-white">Start Free Trial</a>
                                </div>

                            </li>

                        </ul>

                    </div>
                </div>
            </nav>



        </header>
        <!--Header-->

        <!--Begin Hero Section-->

        <section id="home" class="hero">
            <div class="hero-bg"></div>

            <!--container-->

            <div class="container">

                <div class="row hero-padd">


                    <div class="col-md-6 col-xs-12 col-sm-6">

                        <div class="hero-text">

                            <h2>Build a better workplace for your customer</h2>

                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br> sed do eiusmod tempor incididunt ut labore.</p>

                            <a href="#" class="btn btn-white">Get started</a>


                        </div>


                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-6">

                        <img src="<?= URLROOT?>/front/images/image1.svg" alt="">


                    </div>


                </div>
            </div>
            <!--container-->

        </section>


        <!--About-->


        <section id="features" class="padd-80">

            <!--container-->

            <div class="container">

                <div class="row">

                    <div class="col-lg-6 col-md-6 col-xs-12">
                    <ul class="nav nav-tabs" role="tablist" >
                    <li class="nav-item" >
                    <a class="nav-link active" href="#drug" role="tab" data-toggle="tab" >
                        <div class="row">

                            <div class="col-md-12 col-lg-12 col-xs-12">
                               
                                <div class="icon-app">

                                    <div class="icon"><img src="<?= URLROOT?>/front/images/drug.png" alt=""></div>


                                    <div class="icon-header">
                                        <h3>Drug Division</h3>
                                    </div>

                                    <div class="icon-content">
                                        <p style='color:#88889B'>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor.</p>
                                    </div>

                                </div>
                              


                            </div>
                        </div>
                        </a>
</li>
<li class="nav-item">
<a class="nav-link " href="#food" role="tab" data-toggle="tab" >

                        <div class='row'>
                            <div class="col-md-12 col-lg-12 col-xs-12">
                                <div class="icon-app mg-bt-0">

                                    <div class="icon"><img src="<?= URLROOT?>/front/images/food.png" alt=""> </div>

                                    <div class="icon-header">
                                        <h3>Food Division</h3>
                                    </div>

                                    <div class="icon-content">
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor.</p>
                                    </div>

                                </div>
                              

                            </div>
                            </div>
</li>
</a>
                        </ul>
                        
                    </div>

                    <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="tab-content">

                    <div role="tabpanel" class="tab-pane  active" id="drug">
                        <h2 class="title-h2">drug time notifications</h2>
                        <h3 class="title-h3">Take Control of your funds</h3>

                        <p class="font-p">
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
                        <p class="font-p mg-bt-30">
                            Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus duis aute irure dolor in reprehenderit in voluptate velit.</p>
                       
                                <a href="#" class="btn btn-color">Get started</a>

                    </div>
                    <div role="tabpanel" class="tab-pane " id="food">
                        <h2 class="title-h2">food time notifications</h2>
                        <h3 class="title-h3">Take Control of your funds</h3>

                        <p class="font-p">
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
                        <p class="font-p mg-bt-30">
                            Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus duis aute irure dolor in reprehenderit in voluptate velit.</p>
                       
                                <a href="#" class="btn btn-color">Get started</a>

                    </div>
                    </div>
                    </div>


                </div>
            </div>

        </section>

        <!--Features-1-->


        <section id="about-p" class="padd-80 bg-color">

            <!--container-->

            <div class="container">

                <div class="row">

                    <div class="col-lg-6 col-md-6">

                        <div class="features-text">

                            <h2 class="title-h2">who can use this ??</h2>
                            <p class="font-p ">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor i ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

                            <p class="font-p mg-bt-30">
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.
                            </p>

                            <a href="#" class="btn btn-color">Get started</a>
                        </div>


                    </div>

                    <div class="col-lg-6 col-md-6">

                        <img src="<?= URLROOT?>/front/images/image3.svg" alt="">
                    </div>
                </div>


            </div>

            <!--container-->

        </section>




        <!--Features-2-->


        <section id="features-app" class="padd-80 ">

            <!--container-->

            <div class="container">

                <div class="row">

                    <div class="col-lg-6 col-md-6 text-center">

                        <img src="<?= URLROOT?>/front/images/image4.svg" class="img-width" alt="">


                    </div>

                    <div class="col-lg-6 col-md-6">
                        <h2 class="title-h2">How it works ? </h2>
                        <p class="font-p  mg-bt-30">

                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                        </p>

                        <div class="tabs-section">

                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#tab1" role="tab" data-toggle="tab">Save time</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tab2" role="tab" data-toggle="tab">Online Shop</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tab3" role="tab" data-toggle="tab">Security</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane  active" id="tab1">
                                    <p class="font-p  mg-bt-30">
                                        Sed ut perspiciatis unde omnis iste natus error sit volupta tem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore. accusantium

                                    </p>

                                    <div class="row">

                                        <div class="col-md-6 col-xs-6 ">
                                            <ul class="list-p">
                                                <li>Ut enim ad minima</li>
                                                <li>Ut enim ad minima</li>
                                                <li>Ut enim ad minima</li>

                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-xs-6 ">
                                            <ul class="list-p">
                                                <li>Ut enim ad minima</li>
                                                <li>Ut enim ad minima</li>
                                                <li>Ut enim ad minima</li>

                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab2">

                                    <p class="font-p">
                                        Sed ut perspiciatis unde omnis iste natus error sit volupta tem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore. accusantium

                                    </p>
                                    <p>

                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>

                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab3">


                                    <p class="font-p ">
                                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                                    </p>
                            
                            <p> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.
                             </p>



                                </div>
                            </div>

                        </div>



                    </div>
                </div>


            </div>
            <!--container-->

        </section>
        <!--call-to-action-->

        <section id="call-to-action" class="bg-color-1 padd-60">

            <div class="container">

                <div class="row">

                    <div class="col-md-8 col-sm-8 col-xs-12">

                        <div class="call-to-action-text">

                            <h2>Start your free trial</h2>

                            <p>WireShop is free to use till beta. You just pay a merchant <br/> free per successful transaction!</p>

                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="call-to-action-btn">
                            <a href="#" class="btn btn-white">Get started - It's free</a>
                        </div>

                    </div>



                </div>
            </div>


        </section>


        <!--call-to-action-->

        <section id="features" class="padd-80">

            <!--container-->

            <div class="container">

                <div class="row">

                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <div class="row">

                            <div class="col-md-6 col-lg-6 col-xs-12">
                                <div class="icon-app">

                                    <div class="icon"><img src="<?= URLROOT?>/front/images/monitor.svg" alt=""></div>


                                    <div class="icon-header">
                                        <h3>Marketplace</h3>
                                    </div>

                                    <div class="icon-content">
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor.</p>
                                    </div>

                                </div>


                            </div>

                            <div class="col-md-6 col-lg-6 col-xs-12">
                                <div class="icon-app">

                                    <div class="icon"><img src="<?= URLROOT?>/front/images/shopping-cart.svg" alt=""> </div>

                                    <div class="icon-header">
                                        <h3>Shop online</h3>
                                    </div>

                                    <div class="icon-content">
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor.</p>
                                    </div>

                                </div>

                            </div>

                            <div class="col-md-6 col-lg-6 col-xs-12">
                                <div class="icon-app mg-bt-0">

                                    <div class="icon"><img src="<?= URLROOT?>/front/images/card.svg" alt=""> </div>

                                    <div class="icon-header">
                                        <h3>Credit Card</h3>
                                    </div>

                                    <div class="icon-content">
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor.</p>
                                    </div>

                                </div>

                            </div>

                            <div class="col-md-6 col-lg-6 col-xs-12">
                                <div class="icon-app mg-bt-0">

                                    <div class="icon"><img src="<?= URLROOT?>/front/images/car.svg" alt=""> </div>

                                    <div class="icon-header">
                                        <h3>Free Delivery</h3>
                                    </div>

                                    <div class="icon-content">
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor.</p>
                                    </div>

                                </div>

                            </div>



                        </div>



                    </div>

                    <div class="col-lg-6 col-md-6 col-xs-12">

                        <h2 class="title-h2">Real time notifications</h2>
                        <h3 class="title-h3">Take Control of your funds</h3>

                        <p class="font-p">
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
                        <p class="font-p mg-bt-30">
                            Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus duis aute irure dolor in reprehenderit in voluptate velit.</p>
                       
                                <a href="#" class="btn btn-color">Get started</a>

                    </div>


                </div>
            </div>

        </section>


        <section id="features-about" class="padd-80 bg-color">

            <div class="container">

                <div class="row">
                    <div class="row-centered">
                        <div class="col-centered col-lg-7">

                            <h2 class="title-h2">The modern solution</h2>

                            <p class="font-p mg-bt-60">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab

                            </p>
                        </div>


                        <div class="number-block">

                            <div class="chart" data-percent="80">Mastercard</div>

                            <div class="chart" data-percent="30">Credit Card</div>

                            <div class="chart" data-percent="60">Security</div>

                            <div class="chart" data-percent="50">Support</div>

                        </div>




                    </div>
                </div>
            </div>

        </section>

        <!--pricing-->

        <section id="pricing" class="padd-80">

            <!--container-->

            <div class="container">

                <div class="row">


                    <div class="row-centered">
                        <div class="col-centered col-lg-7">

                            <h2 class="title-h2">Pricing</h2>

                            <p class="font-p mg-bt-60">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab

                            </p>

                        </div>


                    </div>

                    <div class="table-price text-center clearfix col-md-12 col-lg-12">

                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#Annually" role="tab" data-toggle="tab">Annually</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#Monthly" role="tab" data-toggle="tab">Monthly</a>
                            </li>

                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">


                            <div role="tabpanel" class="tab-pane active" id="Annually">
                                <div class="prinicng-container">
                                    <div class="content-table row">

                                        <div class="col-md-4 col-lg-4 col-xs-12">


                                            <div class="table-plan">

                                                <img src="<?= URLROOT?>/front/images/free.svg" alt="">
                                                <h2 class="plan1">Free</h2>
                                                <div class="price">
                                                    <div class="num"> 0$</div>
                                                    <div class="per">/mo</div>
                                                </div>


                                                <ul>
                                                    <li>5 user</li>
                                                    <li>5 Email Accounts</li>
                                                    <li>20GB storage</li>
                                                    <li>Webmail Support</li>
                                                </ul>

                                                <div class="price-content-btn ">
                                                    <a href=" " class="btn btn-border color-1 ">Choose Plan</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-lg-4 col-xs-12">
                                            <div class="table-plan">

                                                <div class="background-div">
                                                    <div class="overlay-top">
                                                        <p>Most popular</p>
                                                    </div>
                                                    <img src="<?= URLROOT?>/front/images/business.svg" alt="">
                                                    <h2 class="plan2">Business</h2>
                                                    <div class="price">
                                                        <div class="num"> 29$</div>
                                                        <div class="per">/mo</div>
                                                    </div>


                                                    <ul>
                                                        <li>5 user</li>
                                                        <li>5 Email Accounts</li>
                                                        <li>20GB storage</li>
                                                        <li>Webmail Support</li>
                                                    </ul>

                                                    <div class="price-content-btn ">
                                                        <a href=" " class="btn btn-border color-2 ">Choose Plan</a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md-4 col-lg-4 col-xs-12">
                                            <div class="table-plan">

                                                <img src="<?= URLROOT?>/front/images/premium.svg" alt="">
                                                <h2 class="plan3">Premium</h2>
                                                <div class="price">
                                                    <div class="num"> 99$</div>
                                                    <div class="per">/mo</div>
                                                </div>


                                                <ul>
                                                    <li>5 user</li>
                                                    <li>5 Email Accounts</li>
                                                    <li>20GB storage</li>
                                                    <li>Webmail Support</li>
                                                </ul>

                                                <div class="price-content-btn ">
                                                    <a href=" " class="btn btn-border color-3 ">Choose Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Monthly">
                                <div class="prinicng-container">

                                    <div class="content-table row">

                                        <div class="col-md-4 col-lg-4 col-xs-12">

                                            <div class="table-plan">

                                                <img src="<?= URLROOT?>/front/images/free.svg" alt="">
                                                <h2 class="plan1">Personal</h2>
                                                <div class="price">
                                                    <div class="num"> 20$</div>
                                                    <div class="per">/mo</div>
                                                </div>


                                                <ul>
                                                    <li>5 user</li>
                                                    <li>5 Email Accounts</li>
                                                    <li>20GB storage</li>
                                                    <li>Webmail Support</li>
                                                </ul>

                                                <div class="price-content-btn ">
                                                    <a href=" " class="btn btn-border color-1 ">Choose Plan</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-lg-4 col-xs-12">

                                            <div class="table-plan">

                                                <div class="background-div">
                                                    <div class="overlay-top">
                                                        <p>Most popular</p>
                                                    </div>
                                                    <img src="<?= URLROOT?>/front/images/business.svg" alt="">
                                                    <h2 class="plan2">Basic</h2>
                                                    <div class="price">
                                                        <div class="num">45$</div>
                                                        <div class="per">/mo</div>
                                                    </div>


                                                    <ul>
                                                        <li>5 user</li>
                                                        <li>5 Email Accounts</li>
                                                        <li>20GB storage</li>
                                                        <li>Webmail Support</li>
                                                    </ul>

                                                    <div class="price-content-btn ">
                                                        <a href=" " class="btn btn-border color-2 ">Choose Plan</a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md-4 col-lg-4 col-xs-12">

                                            <div class="table-plan">

                                                <img src="<?= URLROOT?>/front/images/premium.svg" alt="">
                                                <h2 class="plan3">Professional</h2>
                                                <div class="price">
                                                    <div class="num">85$</div>
                                                    <div class="per">/mo</div>
                                                </div>


                                                <ul>
                                                    <li>5 user</li>
                                                    <li>5 Email Accounts</li>
                                                    <li>20GB storage</li>
                                                    <li>Webmail Support</li>
                                                </ul>

                                                <div class="price-content-btn ">
                                                    <a href=" " class="btn btn-border color-3 ">Choose Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>


                    </div>
                </div>


            </div>

            <!--container-->

        </section>

        <!--pricing-->


        <!--testimonials-->

        <section id="testimonials" class="pd-tp-80  pd-bt-100 bg-color clearfix">

            <div class="container">

                <div class="row">

                    <div class="quote">
                        <i class="icon_quotations"></i>

                    </div>
                    <div class="row-centered">
                        <div class="col-centered col-lg-8 col-xs-12 col-md-8">

                            <h2 class="title-h2">Testimonials</h2>
                            <div class="testimonial-caroussel carousel">

                                <div class="item">

                                    <div class="avatar-photo">

                                        <img src="<?= URLROOT?>/front/images/avatar1.jpg" alt="">
                                        <div class="rating">
                                            <span class="icon_star"></span>
                                            <span class="icon_star"></span>
                                            <span class="icon_star"></span>
                                            <span class="icon_star"></span>
                                            <span class="icon_star"></span>
                                        </div>
                                    </div>

                                    <div class="item-inner">

                                        <p>
                                            Nam libero tempore, cum soluta nobis est eligen di opt ios cumque nihil impedit quo minus id quo d maxime placeat facere possimus. Sed ut perspi ciatis unde omnis iste natus error sit </p>




                                        <div class="avatar-item">


                                            <div class="avatar-info">

                                                <h4>Kathleen Mills</h4>
                                                <span>Digital constumer</span>

                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <div class="item">

                                    <div class="avatar-photo">

                                        <img src="<?= URLROOT?>/front/images/avatar2.jpg" alt="">
                                        <div class="rating">
                                            <span class="icon_star"></span>
                                            <span class="icon_star"></span>
                                            <span class="icon_star"></span>
                                            <span class="icon_star"></span>
                                            <span class="icon_star"></span>
                                        </div>
                                    </div>

                                    <div class="item-inner">

                                        <p>
                                            Nam libero tempore, cum soluta nobis est eligen di opt ios cumque nihil impedit quo minus id quo d maxime placeat facere possimus. Sed ut perspi ciatis unde omnis iste natus error sit </p>

                                        <div class="avatar-item">

                                            <div class="avatar-info">

                                                <h4>Tyler Bryant</h4>
                                                <span>Digital constumer</span>

                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="avatar-photo">

                                        <img src="<?= URLROOT?>/front/images/avatar3.jpg" alt="">
                                        <div class="rating">
                                            <span class="icon_star"></span>
                                            <span class="icon_star"></span>
                                            <span class="icon_star"></span>
                                            <span class="icon_star"></span>
                                            <span class="icon_star"></span>
                                        </div>

                                    </div>


                                    <div class="item-inner">

                                        <p>
                                            Nam libero tempore, cum soluta nobis est eligen di opt ios cumque nihil impedit quo minus id quo d maxime placeat facere possimus. Sed ut perspi ciatis unde omnis iste natus error sit </p>




                                        <div class="avatar-item">


                                            <div class="avatar-info">

                                                <h4>Bruce Wong</h4>
                                                <span>Digital constumer</span>

                                            </div>


                                        </div>


                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>


                </div>

            </div>
        </section>

        <!--testimonials-->

        <!--blog-->

        <section id="blog" class="padd-80 clearfix">

            <div class="container">
                <div class="row">

                    <div class="row-centered">
                        <div class="col-centered col-lg-7 ">

                            <h2 class="title-h2">Blog Post</h2>

                            <p class="font-p mg-bt-60">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab

                            </p>

                        </div>


                    </div>

                    <div class="col-md-4 col-lg-4 col-xs-12">

                        <div class="blog-holder">

                            <div class="img-blog">
                                <img src="<?= URLROOT?>/front/images/blog1.jpg" alt="">
                            </div>



                            <div class="info-blog">
                                <div class="author-blog">
                                    <span>Jhone Doe</span>

                                </div>

                                <h4>Sed ut perspiciatis unde omnis iste</h4>
                                <p>uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                            </div>

                            <div class="meta clearfix">

                                <ul>
                                    <li> <a href="#">Comments (5)</a></li>
                                    <li> <a href="single-post.html">Read More</a></li>

                                </ul>


                            </div>


                        </div>

                    </div>

                    <div class="col-md-4 col-lg-4 col-xs-12">

                        <div class="blog-holder">

                            <div class="img-blog">
                                <img src="<?= URLROOT?>/front/images/blog2.jpg" alt="">
                            </div>



                            <div class="info-blog">
                                <div class="author-blog">
                                    <span>Jhone Doe</span>

                                </div>

                                <h4>Sed ut perspiciatis unde omnis iste</h4>
                                <p>uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                            </div>

                            <div class="meta clearfix">

                                <ul>
                                    <li> <a href="#">Comments (5)</a></li>
                                    <li> <a href="single-post.html">Read More</a></li>

                                </ul>


                            </div>


                        </div>

                    </div>

                    <div class="col-md-4 col-lg-4 col-xs-12">

                        <div class="blog-holder">

                            <div class="img-blog">
                                <img src="<?= URLROOT?>/front/images/blog3.jpg" alt="">
                            </div>



                            <div class="info-blog">
                                <div class="author-blog">
                                    <span>Jhone Doe</span>

                                </div>

                                <h4>Sed ut perspiciatis unde omnis iste</h4>
                                <p>uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                            </div>

                            <div class="meta clearfix">

                                <ul>
                                    <li> <a href="#">Comments (5)</a></li>
                                    <li> <a href="single-post.html">Read More</a></li>

                                </ul>


                            </div>


                        </div>

                    </div>


                </div>
            </div>

        </section>
        <!--blog-->

        <!--get app-->

        <section id="app" class=" pd-tp-80  pd-bt-100 bg-color  clearfix">

            <div class="container">
                <div class="row-centered">
                    <div class="col-centered col-lg-7 ">

                        <h2 class="title-h2">Get WireShop for free !</h2>

                        <p class="font-p mg-bt-30">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab

                        </p>

                        <a href="#" class="btn btn-color">SIGN UP FOR FREE<i class="arrow_right"></i></a>

                    </div>

                </div>
            </div>

        </section>

        <!--get app-->

        <!--sponsors clients-->

        <section id="sponsors" class="pd-tp-80 pd-bt-80">

            <!--container-->

            <div class="container">
                <div class="row">
                    <div class="client-caroussel">

                        <div class="item">

                            <div class="client-item-img ">
                                <img src="<?= URLROOT?>/front/images/logo1.png" class="img-responsive " alt=" " title=" ">
                            </div>
                        </div>
                        <div class="item">

                            <div class="client-item-img ">
                                <img src="<?= URLROOT?>/front/images/logo2.png" class="img-responsive " alt=" " title=" ">
                            </div>
                        </div>

                        <div class="item">

                            <div class="client-item-img">
                                <img src="<?= URLROOT?>/front/images/logo3.png" class="img-responsive " alt=" " title=" ">
                            </div>
                        </div>

                        <div class="item">

                            <div class="client-item-img">
                                <img src="<?= URLROOT?>/front/images/logo4.png" class="img-responsive " alt=" " title=" ">
                            </div>
                        </div>

                        <div class="item">

                            <div class="client-item-img">
                                <img src="<?= URLROOT?>/front/images/logo5.png" class="img-responsive " alt=" " title=" ">
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>


    </div>

    <!--End page cotnent-->

    <!--Footer-->

 <?php
    require("includes/footer.php");
 ?>
</body>


</html>