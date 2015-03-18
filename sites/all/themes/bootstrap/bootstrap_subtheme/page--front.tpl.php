<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="loader">
    <div class="loaded">&nbsp;</div>
</div>

<!-- MENU Section-->

<header>
    <nav class="navbar fixed-nav hide-nav navbar-default  navbar-fixed-top" id="main-navbar" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a href="#" class="navbar-brand top-logo"><img src="<?php print path_to_theme();?>/bootstrap_subtheme/studio/SB/logodark.png" alt="logo" /></a>
            </div>  <!--end navbar-header -->

            <div class="collapse navbar-collapse" id="navbar-collapse">

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#home"><?php print t('Home');?></a></li>
                    <li><a href="#features"><?php print t('What');?></a></li>
                    <li><a href="#describe"><?php print t('Why');?></a></li>
                    <li><a href="#price"><?php print t('How');?></a></li>
                    <li><a href="#service"><?php print t('About Shopbox');?></a></li>
                    <li><a href="#contact"><?php print t('Contact');?></a></li>
                    <li><a href="https://shopbox.recruiterbox.com/" target="_blank"><?php print t('Jobs');?></a></li>
                </ul>
            </div>  <!--end collapse -->
        </div>  <!--end container -->
    </nav>
</header>

<!--home section-->


<!-- if you like to use surface. change class="home" to class="surface"-->
<section id="home" class="home" >

    <!-- <div id="surface"></div>-->
    <canvas id="canvas"></canvas>
    <!--Header text -->
    <h1><?php print t('One <strong>business</strong> One <strong>app</strong>');?></h1>
    <h3 style="font-weight: bold;"><?php print t('Subscribe to try ShopBox');?></h3>
    <h6 style="color: #fff;"><?php print t('(you can also download our free app in the App Store)');?></h6>
    <div class=" home-subscribe center-block">
        <form id="request" class="subscription-form mailchimp form-inline" role="form" novalidate="true" action="/contact" method="POST">

            <!-- for canvas use class overlay to canvas-overlay-->
            <!-- for surface use class overlay to surface-overlay-->
            <div class="canvas-overlay">

                <div class="container">
                    <div class="row">

                        <div class="col-md-10 col-md-offset-1">
                            <div class="home-intro-block logo-intro">
                                <!--Header logo-->
                                <div class="body-logo">
                                    <img src="<?php print path_to_theme();?>/bootstrap_subtheme/studio/SB/logo.png" alt="">
                                </div>

                                <!--Header text -->
                                <h1><?php print t('One <strong>business</strong> one <strong>app</strong>');?></h1>
                                <div class="row" style="color:white;margin-top:35px">
                                    <div class="col-lg-12" style="margin-bottom: 10px">
                                        <h4><?php print t('Save time and earn more &nbsp; &nbsp; - &nbsp; &nbsp; Administration made easy as pie &nbsp; &nbsp; - &nbsp; &nbsp; Works with your ERP');?></h4>
                                    </div>
                                </div>
                                <h4 style="color:white;margin-top: 35px;"><?php print t('Subscribe to try ShopBox  when we go Live.');?></h4>
                                <div class=" home-subscribe center-block" style="margin-top: 15px;">
                                    <form id="request" class="subscription-form mailchimp form-inline" role="form" novalidate="true" action="/contact" method="POST">

                                        <!-- SUBSCRIPTION SUCCESSFUL OR ERROR MESSAGES -->
                                        <h6 class="subscription-success"></h6>
                                        <h6 class="subscription-error"></h6>
                                        <input type="email" name="email" id="subscriber-email" placeholder="Din mailadresse" class="form-control subscribe-input input-lg">
                                        <!-- SUBSCRIBE BUTTON -->
                                        <button type="submit" id="subscribe-button" class="btn btn-primary btn-lg" data-loading-text="Sender..."><?php print t('Send');?></button>

                                    </form>
                                </div>
                                <!--DOWNLOAD BUTTON -->
                                <!--<div class="download-button">-->
                                <!--<a href="#" class="btn btn-default download-btn">Available on <i class="fa fa-apple fa-lg" data-selector="i.fa" style="outline: none; cursor: default;"></i></a>-->
                                <!--<a href="#" class="btn btn-default download-btn extra-width">Get it on <i class="fa fa-android fa-lg" data-selector="i.fa" style="outline: none; cursor: default;"></i></a>-->

                                <!--</div>-->

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Start Video -->
            <div id="P1" class="player"
                 data-property="{videoURL:'http://youtu.be/l_tHTmd5pgk',containment:'#home',startAt:0,mute:true,autoPlay:true,loop:true,opacity:1, showControls:false}">
            </div>
            <!-- End Video -->

</section>


<!--    feature section-->
<section id="features" class="sections">
    <div class="container">
        <div class="row">

            <!--  Heading-->
            <div class="heading wow fadeIn animated" data-wow-offset="120" data-wow-duration="1.5s">
                <div class="title text-center"><h1><?php print t('Your entire business in one app');?></h1></div>
                <div class="subtitle text-center "><h5><?php print t('We have programmed 20,000+ hours of code so you don’t have to.    ');?></h5></div>
                <div class="separator text-center"></div>
            </div>
            <div class="features">
                <!-- FEATURES LEFT SIDE -->
                <div class="col-sm-4 features-left wow fadeInLeft animated animated" data-wow-offset="10" data-wow-duration="1.5s" style="visibility: visible;-webkit-animation-duration: 1.5s; -moz-animation-duration: 1.5s; animation-duration: 1.5s;">
                    <!-- FEATURE -->
                    <div class="feature-items">
                        <!-- ICON -->
                        <div class="icon-container hidden-sm"><img src="<?php print path_to_theme();?>/bootstrap_subtheme/studio/icons/kunder.png" alt="Kunder" class="features-icon" /></div>

                        <div class="text-right">
                            <h4 class="main-color"><?php print t('Costumers');?></h4>
                            <p>
                                <?php print t('Who are your best customers? Make your own customer club. Get customers back into the store.');?>
                            </p>
                        </div>

                    </div>
                    <!-- end Single Feature item -->

                    <!-- FEATURE -->
                    <div class="feature-items">
                        <!-- ICON -->
                        <div class="icon-container hidden-sm"><img src="<?php print path_to_theme();?>/bootstrap_subtheme/studio/icons/økonomi.png" alt="økonomi" class="features-icon" /></div>

                        <div class="text-right">
                            <h4 class="main-color"><?php print t('Economy');?></h4>
                            <p>
                                <?php print t('Who are your best customers? Make your own customer club. Get customers back into the store.');?>
                            </p>
                        </div>

                    </div>
                    <!-- end Single Feature item -->

                    <!-- FEATURE -->
                    <div class="feature-items">

                        <!-- ICON -->
                        <div class="icon-container hidden-sm"><img src="<?php print path_to_theme();?>/bootstrap_subtheme/studio/icons/rapporter.png" alt="Rapporter" class="features-icon" /></div>


                        <!-- FEATURE HEADING AND DESCRIPTION -->
                        <div class="text-right">
                            <h4 class="main-color"><?php print t('Reports');?></h4>
                            <p>
                                <?php print t('Get monthly, weekly and daily reports which you can read yourself or send to your accountant.');?>
                            </p>
                        </div>

                    </div>
                    <!-- end Single Feature item -->


                </div>
                <!-- /END FEATURES LEFT -->

                <!-- PHONE IMAGE -->
                <div class="col-sm-4">
                    <div class="wow bounceInUp animated animated" data-wow-offset="120" data-wow-duration="1.5s">
                        <img src="<?php print path_to_theme();?>/bootstrap_subtheme/studio/SB/mobile.png" alt="App Feature Image">
                    </div>
                </div>

                <!-- FEATURES RIGHT -->
                <div class="col-sm-4 features-right wow fadeInRight animated animated" data-wow-offset="10" data-wow-duration="1.5s">

                    <!-- FEATURE -->
                    <div class="feature-items">

                        <!-- ICON -->
                        <div class="icon-container hidden-sm"><img src="<?php print path_to_theme();?>/bootstrap_subtheme/studio/icons/kasse.png" alt="Kasse" class="features-icon" /></div>


                        <div class="fetaure-right">
                            <h4 class="main-color"><?php print t('Counter');?></h4>
                            <p>
                                <?php print t('Create your products,  receive payments or create an invoice, view live sales data, redeem gift cards and print receipts.');?>
                            </p>
                        </div>

                    </div>
                    <!-- end Single Feature item -->

                    <!-- FEATURE -->
                    <div class="feature-items">
                        <!-- ICON -->
                        <div class="icon-container hidden-sm"><img src="<?php print path_to_theme();?>/bootstrap_subtheme/studio/icons/medarbejdere.png" alt="Medarbejdere" class="features-icon" /></div>

                        <div class="fetaure-right">
                            <h4 class="main-color"><?php print t('Staff');?></h4>
                            <p>
                                <?php print t('Set up your employees and give them rights. View sales and activities per employee.');?>
                            </p>
                        </div>

                    </div>
                    <!-- end Single Feature item -->

                    <!-- FEATURE -->
                    <div class="feature-items">
                        <!-- ICON -->
                        <div class="icon-container hidden-sm"><img src="<?php print path_to_theme();?>/bootstrap_subtheme/studio/icons/kvitteringer.png" alt="Kvitteringer" class="features-icon"/>
                        </div>

                        <div class="fetaure-right">
                            <h4 class="main-color"><?php print t('Receipts');?></h4>
                            <p>
                                <?php print t('Scan and save your receipts so you get a complete overview of your finances wherever you are.');?>
                            </p>
                        </div>
                    </div><!-- end Single Feature item -->

                </div><!-- /END FEATURES RIGHT -->
            </div>
        </div>
</section>
<!--    feature section end-->

<!--    as seen section-->
<section id="asseen" class="sections">
    <div class="container">
        <div class="row">
            <!--  Heading-->
            <div class="heading wow fadeIn animated" data-wow-offset="120" data-wow-duration="1.5s">
                <div class="title text-center"><h1><?php print t('The talk about us in the media');?></h1></div>
                <div class="separator text-center"></div>
            </div>
            <div class="col-lg-3 text-center">
                <a href="http://www.business.dk/vaekst/ivaeksaetter-vil-vaere-de-smaa-butikkers-nye-bedste-ven" target="_blank"><img src="<?php print path_to_theme();?>/bootstrap_subtheme/studio/images/feature/berlingske.png" style="max-width:200px" /></a>
            </div>
            <div class="col-lg-3 text-center">
                <a href="http://www.radio24syv.dk/programmer/elektronista/10873222/148-nu-skal-du-shoppe-med-mobilen/" target="_blank"><img src="<?php print path_to_theme();?>/bootstrap_subtheme/studio/images/feature/r24.png"  style="max-width:200px" /></a>
            </div>
            <div class="col-lg-3 text-center">
                <a href="http://trendsonline.dk/2015/02/12/shopbox-vil-forsimple-butikkers-administration-og-vaere-verdens-bedste-til-det/" target="_blank"><img src="<?php print path_to_theme();?>/bootstrap_subtheme/studio/images/feature/trends.png"  style="max-width:200px" /></a>
            </div>
            <div class="col-lg-3 text-center">
                <a href="http://detailfolk.dk/detailnyheder/ny_app_vil_gre_livet_lettere_for_sm_butikker.html" target="_blank"><img src="<?php print path_to_theme();?>/bootstrap_subtheme/studio/images/feature/detail.png" style="max-width:200px"  /></a>
            </div>
        </div>
    </div>
</section>
<!--    as seen  section end-->

<!-- testimonial Section-->
<section id="testimonial" class="testimonial">
    <div class="overlay-img">
        <div class="container">
            <div class="row">

                <!-- testimonial -->
                <div class="testimonials">
                    <div class="testimonial-item2 wow bounceIn animated" data-wow-offset="120" data-wow-duration="1.5s">
                        <div class="testimonial-msg">
                            <i class="fa fa-quote-left"></i>
                            <?php print t('Shopbox has redefined my view on what a Cash Register could do');?>
                            <i class="fa fa-quote-right pull-right"></i>
                        </div>
                        <div class="white-separator"></div>

                        <!--  INFORMATION -->
                        <div class="testimonial-name"><?php print t('Stine Høyer Rasmussen');?></div>
                        <div class="testimonial-info"><?php print t('Owner, SecondStore, Vintage Clothing');?></div>
                    </div>

                </div>
            </div><!-- testimonial row End-->
        </div><!-- testimonial Overlay End-->
    </div><!-- testimonial Container End-->
</section><!-- testimonial Section End-->


<!-- Describe Section-->
<section  id="describe" class="sections">
    <div class="container">
        <div class="row">
            <div class="col-md-5">

                <!--  Heading-->
                <div class="heading black-text wow fadeIn animated" data-wow-offset="120" data-wow-duration="1.5s">
                    <div class="title-half"><h1><?php print t('More control');?></h1></div>
                    <div class="subtitle-half"><h5><?php print t('and more profits for your business');?></h5></div>
                    <div class="separator-left"></div>
                </div>

                <div class="describe-details wow fadeInLeft animated" data-wow-offset="10" data-wow-duration="1.5s">
                    <p>
                        <?php print t('You need a simple solution to manage your business whether you sell coffee, food, bicycles, books or a new hairstyle. Shopbox was done with simplicity in mind and works with most businesses. Easy to set up. Easy to manage. And it works both online and offline.');?>
                    </p>
                </div>

            </div>
            <div class="col-md-7">
                <div class="text-center describe-images wow fadeInRight animated" data-wow-offset="10" data-wow-duration="1.5s">
                    <img src="<?php print path_to_theme();?>/bootstrap_subtheme/studio/SB/Bapp4DK.png" alt="" />
                </div>
            </div>
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->



<section id="describe2" class="sections" style="display: none;">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-md-push-6">


                <!--  Heading-->

                <div class="describe-details wow fadeInRight animated" data-wow-offset="10" data-wow-duration="1.5s">

                    <div class="panel-group describe-panel" id="accordion">


                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne-22">
                                        <i class="indicator glyphicon glyphicon-ok"></i>
                                        This Is Awesome WOW JUST?
                                    </a>

                                </h4>
                            </div>
                            <div id="collapseOne-22" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>


                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo-23">
                                        <i class="indicator glyphicon glyphicon-ok"></i>
                                        We have awesome features
                                    </a>

                                </h4>
                            </div>
                            <div id="collapseTwo-23" class="panel-collapse collapse">
                                <div class="panel-body">
                                    anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>


                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree-24">
                                        <i class="indicator glyphicon glyphicon-ok"></i>
                                        why buy wow landing page builder?
                                    </a>

                                </h4>
                            </div>
                            <div id="collapseThree-24" class="panel-collapse collapse">
                                <div class="panel-body">
                                    nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree-25">
                                        <i class="indicator glyphicon glyphicon-ok"></i>
                                        Oh yeah sure cool?
                                    </a>

                                </h4>
                            </div>
                            <div id="collapseThree-25" class="panel-collapse collapse">
                                <div class="panel-body">
                                    nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-md-6 col-md-pull-6">
                <div class="text-center describe-images wow fadeInLeft animated" data-wow-offset="10" data-wow-duration="1.5s">
                    <img src="<?php print path_to_theme();?>/bootstrap_subtheme/studio/images/mobiles.png" alt="">
                </div>

            </div>
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->


<!-- funfact Section-->
<section id="funfact" class="funfact">
    <div class="overlay-img">
        <div class="container">
            <div class="row">

                <!-- funfact -->
                <div class="heading white-text wow fadeIn animated" data-wow-offset="120" data-wow-duration="1.5s">
                    <div class="title text-center"><h1><?php print t('Facts about Shopbox');?></h1></div>
                    <div class="subtitle text-center "><h5><?php print t('A few things you might not know about us');?></h5></div>
                    <div class="separator text-center"></div>
                </div>

                <div class="funfacts-counter2 white-text">
                    <div class="col-sm-4">
                        <div class="statistic-counter">15</div>
                        <div class="statistic-text"><?php print t('Geeks');?></div>
                    </div>
                    <div class="col-sm-4">
                        <div class="statistic-counter">3</div>
                        <div class="statistic-text"><?php print t('years old');?></div>
                    </div>
                    <div class="col-sm-4">
                        <div class="statistic-counter">100</div>
                        <div class="statistic-text"><?php print t('% customer-focused');?></div>
                    </div>


                </div>


            </div><!-- funfact row End-->
        </div><!-- funfact Overlay End-->
    </div><!-- funfact Container End-->
</section><!-- funfact Section End-->


<!-- ScreenShot Section-->
<section id="price" class="sections">

    <div class="container">

        <div class="row">

            <!--  Heading-->
            <div class="heading wow fadeIn animated animated" data-wow-offset="120" data-wow-duration="1.5s" style="visibility: visible; -webkit-animation-duration: 1.5s;">
                <div class="title text-center"><h1><?php print t('Size matters');?></h1></div>
                <div class="subtitle text-center "><h5><?php print t('...from Free to Fair');?></h5></div>
                <div class="separator text-center"></div>
            </div>

            <div class="price-2">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <ul class="plan">
                        <li class="plan-name">
                            Free
                        </li>
                        <li class="plan-price">
                            <strong>100</strong> <?php print t('transactions per month');?>
                        </li>
                        <li>
                            <strong>1</strong> <?php print t('staff');?>
                        </li>
                        <li>
                            <strong><?php print t('Shopbox-branded');?></strong>
                        </li>
                        <li>
                            <strong><?php print t('Mail support');?></strong>
                        </li>
                        <li class="plan-action">
                            <strong style="font-size: 35px;"><?php print t('Free');?></strong>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-4 col-xs-12">
                    <ul class="plan wow fadeIn animated animated" data-wow-offset="120" data-wow-duration="1.5s" style="visibility: visible; -webkit-animation-duration: 1.5s;">
                        <li class="plan-name">
                            Pro
                        </li>
                        <li class="plan-price">
                            <strong>10.000</strong> <?php print t('transactions per month');?>
                        </li>
                        <li>
                            <strong>10</strong> <?php print t('staff');?>
                        </li>
                        <li>
                            <strong><?php print t('Your Brand');?></strong>
                        </li>
                        <li>
                            <?php print t('<strong>Hotline 9 – 16</strong> support');?>
                        </li>
                        <li class="plan-action">
                            <strong style="font-size: 35px;"><?php print t('399 kr.');?></strong>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-4 col-xs-12">
                    <ul class="plan wow fadeInRight animated animated" data-wow-offset="120" data-wow-duration="1.5s" style="visibility: visible; -webkit-animation-duration: 1.5s;">
                        <li class="plan-name">
                            Mighty
                        </li>
                        <li class="plan-price">
                            <?php print t('<strong>Unlimited</strong> transactions');?>
                        </li>
                        <li>
                            <?php print t('<strong>Unlimited</strong> staff');?>
                        </li>
                        <li>
                            <?php print t('<strong>Your Brand</strong>');?>
                        </li>
                        <li>
                            <?php print t('<strong>Hotline 24/7</strong> support');?>
                        </li>
                        <li class="plan-action">
                         <strong style="font-size: 35px;">   <?php print t('999 kr.');?></strong>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Service Section-->
<section id="service" class="sections">
    <div class="container">
        <div class="row">

            <div class="col-sm-4 clearfix">
                <div class="feature text-center  wow fadeInLeft animated" data-wow-offset="120" data-wow-duration="1.5s">
                    <i class="fa fa-info"></i>
                    <h4 class="text-white"><?php print t('What is Shopbox?');?></h4>
                    <p class="text-white">
                        <?php print t('Shopbox provides all the tools you need to manage your business in a simple mobile and web App. Shopbox includes a POS, customer club and simple economy and staff function. And you can download the app directly from the App store. You have one business - why not just have one app?');?>
                    </p>
                </div><!--end feature-->
            </div>

            <div class="col-sm-4 clearfix">
                <div class="feature text-center  wow fadeIn animated" data-wow-offset="120" data-wow-duration="1.5s">
                    <i class="fa fa-heart"></i>
                    <h4 class="text-white"><?php print t('What we believe in');?></h4>
                    <p class="text-white">
                        <?php print t('We believe that there are unlimited opportunities for our success. We believe in good customer service and great products. However, most importantly, we believe in hiring creative, entrepreneurial and ambitious people to help us. Not just to make things better, but to rethink business administration.');?>
                    </p>
                </div><!--end feature-->
            </div>

            <div class="col-sm-4 clearfix">
                <div class="feature text-center  wow fadeInRight animated" data-wow-offset="120" data-wow-duration="1.5s">
                    <i class="fa fa-users"></i>
                    <h4 class="text-white"><?php print t('Become an Affiliate');?></h4>
                    <p class="text-white">
                        <?php print t('If you have a huge number of friends, who primarily are shop owners or just access to many small businesses, perhaps we can be partners. We work with banks, ISPs, industry organizations and software vendors. You know your customers better than we do.');?> <a href="mailto:cz@shopbox.com"><?php print t('Email us to learn more.');?></a>
                    </p>
                </div><!--end feature-->
            </div>

        </div><!--end row-->

    </div><!--end container-->
</section>


<!-- DOWNLOAD Section-->
<section  id="download" class="download-bg-img" style="display: none">
    <div class="overlay-img">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="download-full-width white-text">

                        <!--  Heading-->
                        <div class="heading wow fadeIn animated" data-wow-offset="120" data-wow-duration="1.5s">
                            <div class="title text-center"><h1>Download Now</h1></div>
                            <div class="subtitle text-center "><h5>This is subtile. lorem ipsum dolar shit amet</h5></div>
                            <div class="separator-min-height text-center"></div>
                        </div>
                        <div class="col-sm-8 col-sm-offset-2 wow fadeIn animated" data-wow-offset="120" data-wow-duration="1.5s">

                            <p>quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et</p>
                            <div class="download-button only-button wow fadeIn animated" data-wow-offset="120" data-wow-duration="1.5s">
                                <a href="#" class="btn btn-default download-btn">Available on <i class="fa fa-apple fa-lg"></i></a>
                                <a href="#" class="btn btn-default download-btn extra-width">Get it on <i class="fa fa-android fa-lg"></i></a>

                            </div>
                        </div>
                    </div>

                </div><!-- end col -->
            </div>
        </div>
    </div>
</section>

<section id="team" class="team sections">
    <div class="container">

        <!-- Team Heading-->
        <div class="heading wow fadeIn animated" data-wow-offset="120" data-wow-duration="1.5s">
            <div class="title text-center"><h1><?php print t('Management');?></h1></div>
            <div class="subtitle text-center "><h5><?php print t('We are good at table tennis.');?></h5></div>
            <div class="separator text-center"></div>
        </div>


        <div class="row">
            <div class="col-sm-4">
                <div class="team-member team-bg wow fadeInLeft animated" data-wow-offset="120" data-wow-duration="1.5s">
                    <img src="<?php print path_to_theme();?>/bootstrap_subtheme/studio/SB/team/CZ.png" class="img-circle" alt="Team Member">
                    <h2>Christian Zigler</h2>
                    <h5>Founder &amp; CEO</h5>
                    <p>+45 26 170 445</p>
                    <p><a href="mailto:cz@shopbox.com">cz@shopbox.com</a></p>
                    <ul class="list-inline">
                        <li><a href="https://dk.linkedin.com/in/oxholmzigler" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div><!--end team member-->
            </div>

            <div class="col-sm-4">
                <div class="team-member team-bg wow fadeIn animated" data-wow-offset="120" data-wow-duration="1.5s">
                    <img src="<?php print path_to_theme();?>/bootstrap_subtheme/studio/SB/team/AK.png" class="img-circle" alt="Team Member">
                    <h2>Anders Kjørup</h2>
                    <h5>CCO</h5>
                    <p>+45 30 500 500</p>
                    <p><a href="mailto:ak@shopbox.com">ak@shopbox.com</a></p>
                    <ul class="list-inline">
                        <li><a href="https://dk.linkedin.com/in/anderskjoerup" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div><!--end team member-->
            </div>

            <div class="col-sm-4">
                <div class="team-member team-bg wow fadeInRight animated" data-wow-offset="120" data-wow-duration="1.5s">
                    <img src="<?php print path_to_theme();?>/bootstrap_subtheme/studio/SB/team/CE.png" class="img-circle" alt="Team Member">
                    <h2>Christian Elbek Pedersen</h2>
                    <h5>CTO</h5>
                    <p>+45 31 790 661</p>
                    <p><a href="mailto:ak@shopbox.com">cep@shopbox.com</a></p>
                    <ul class="list-inline">
                        <li><a href="https://dk.linkedin.com/in/christianelbek" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div><!--end team member-->
            </div>
            <div class="col-lg-4 col-lg-offset-4">
                <a href="https://shopbox.recruiterbox.com/" target="_blank" class="btn btn-primary btn-lg" style="width:100%;margin-top:30px">Join the team!</a>
            </div>
        </div><!--end row-->
    </div><!--end container-->
</section>






<!-- Newsletter-->
<section id="subscription">
    <div class="subscription">
        <div class="overlay-img">
            <div class="container">
                <div class="row">
                    <div class="heading white-text wow fadeIn animated animated" data-wow-offset="120" data-wow-duration="1.5s" style="visibility: visible; -webkit-animation-duration: 1.5s;">
                        <div class="title text-center"><h1><?php print t('Subscribe to try ShopBox  when we go Live');?></h1></div>
                        <div class="title text-center"><h1><?php print t('and we will give you shopbox for Free during the first 30 days');?></h1></div>
                        <div class="subtitle text-center "><h5><?php print t('(you can also download our free app in the App Store)');?></h5></div>
                        <div class="separator text-center"></div>
                    </div>
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="subscribtion-form center-block wow bounceIn animated" data-wow-offset="120" data-wow-duration="1.5s">
                            <form id="request2" class="subscription-form mailchimp form-inline" role="form" novalidate="true" action="/contact" method="POST">

                                <!-- SUBSCRIPTION SUCCESSFUL OR ERROR MESSAGES -->
                                <h6 class="subscription-success"></h6>
                                <h6 class="subscription-error"></h6>
                                <input type="email" name="email" id="subscriber-email1" placeholder="<?php t('Your Email address');?>" class="form-control subscribe-input input-lg">
                                <!-- SUBSCRIBE BUTTON -->
                                <button id="subscribe-button2" class="btn btn-primary btn-lg" type="submit" data-loading-text="Sender..."><?php print t('Send');?></button>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>




<!-- Contact Section-->
<section id="contact" class="sections">
    <div class="container">
        <div class="row contact-2">

            <div class="heading wow fadeIn animated" data-wow-offset="120" data-wow-duration="1.5s">
                <div class="title text-center"><h1><?php print t('Contact us');?></h1></div>
                <div class="subtitle text-center "><h5><?php print t('We are looking forward to hearing from you');?></h5></div>
                <div class="separator text-center"></div>
            </div>

            <!--address-->
            <div class="col-md-4">
                <div class="contact-address">
                    <h4>Shopbox Danmark</h4>
                    <ul>
                        <li>Gothersgade 42</li>
                        <li>1123 København K</li>
                        <li> <abbr title="Phone">P: </abbr> +45 31 13 15 15</li>
                    </ul>
                </div>
                <hr />
                <div class="contact-address">
                    <h4>Shopbox International</h4>
                    <ul>
                        <li>70 Clifton Street</li>
                        <li>EC2A4HB<li>
                        <li>London, United Kingdom</li>
                        <li> <abbr title="Phone">P: </abbr> +44 74 78 62 07 83</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-8 ">
                <!-- CONTACT FORM -->
                <div data-wow-offset="10" data-wow-duration="1.55s" class="wow rollIn animated contact-form" >


                    <div id="message"></div>
                    <form method="post" action="/contact" name="contactform" id="contactform">
                        <fieldset>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <input type="text" class="form-control " name="name" id="name" placeholder="<?php print t('Name');?>">
                                </div>
                                <div class="col-md-6">
                                    <input type="text"  class="form-control " name="email" id="email" placeholder="<?php print t('Email');?>">
                                </div>
                                <div class="col-md-12">
                                    <input class="form-control " id="subject" type="text" name="subject" placeholder="<?php print t('Subject');?>">
                                    <textarea class="form-control " id="msg" rows="5" placeholder="<?php print t('Message');?>"></textarea>
                                    <button class="btn btn-primary btn-lg" type="submit" id="submit" name="submit"  data-loading-text="Loading..."><i class="fa fa-send"></i><?php print t('Send');?></button>
                                </div>
                            </div>
                        </fieldset>
                    </form>

                </div>
            </div>

        </div>
    </div>
</section>




<!-- FOOTER Section-->

<footer id="footer">
    <div class="footer-1-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center social">

                    <h2>Shopbox</h2>

                    <span>We're social, Come and meet us</span><br>
                    <a href="https://www.facebook.com/shopboxCom" target="_blank"><span class="fa fa-facebook-square"></span></a>
                    <a href="https://twitter.com/shopboxCom" target="_blank"><span class="fa fa-twitter-square"></span></a>
                    <a href="https://www.linkedin.com/company/2481234?trk=tyah" target="_blank"><span class="fa fa-linkedin-square"></span></a>
                    <a href="https://plus.google.com/105062306139704740209/posts" target="_blank"><span class="fa fa-google-plus-square"></span></a>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div>

</footer>
