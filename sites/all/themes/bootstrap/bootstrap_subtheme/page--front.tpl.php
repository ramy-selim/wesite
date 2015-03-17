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
                    <li><a href="#features"><?php print t('Hvad');?></a></li>
                    <li><a href="#describe"><?php print t('Hvorfor');?></a></li>
                    <li><a href="#price"><?php print t('Hvordan');?></a></li>
                    <li><a href="#service"><?php print t('Om Shopbox');?></a></li>
                    <li><a href="#contact"><?php print t('Kontakt');?></a></li>
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
    <h1>én <strong>forretning</strong> én <strong>app</strong></h1>
    <h3 style="font-weight: bold;">Giv os din mailadresse – så giver vi dig Shopbox Pro gratis i 30 dage</h3>
    <h6 style="color: #fff;">(du kan også bare få vores gratis app)</h6>
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
                                <h1>én <strong>forretning</strong> én <strong>app</strong></h1>
                                <div class="row" style="color:white;margin-top:35px">
                                    <div class="col-lg-12" style="margin-bottom: 10px">
                                        <h4>Spar tid og tjen mere&nbsp;&nbsp;-&nbsp;&nbsp; Administration gjort pærelet&nbsp;&nbsp;-&nbsp;&nbsp;Virker med dit økonomisystem</h4>
                                    </div>
                                </div>
                                <h4 style="color:white;margin-top: 35px;">Få en mail når vi er live. Vi spammer ikke. </h4>
                                <div class=" home-subscribe center-block" style="margin-top: 15px;">
                                    <form id="request" class="subscription-form mailchimp form-inline" role="form" novalidate="true" action="/contact" method="POST">

                                        <!-- SUBSCRIPTION SUCCESSFUL OR ERROR MESSAGES -->
                                        <h6 class="subscription-success"></h6>
                                        <h6 class="subscription-error"></h6>
                                        <input type="email" name="email" id="subscriber-email" placeholder="Din mailadresse" class="form-control subscribe-input input-lg">
                                        <!-- SUBSCRIBE BUTTON -->
                                        <button type="submit" id="subscribe-button" class="btn btn-primary btn-lg" data-loading-text="Sender...">Send</button>

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
                <div class="title text-center"><h1>Hele din forretning samlet i én app</h1></div>
                <div class="subtitle text-center "><h5>Vi har kodet i 20.000 timer så du ikke skal gøre det. </h5></div>
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
                            <h4 class="main-color">Kunder</h4>
                            <p>
                                Hvem er dine bedste kunder? Lav din egen kundeklub. Få kunderne tilbage i butikken
                            </p>
                        </div>

                    </div>
                    <!-- end Single Feature item -->

                    <!-- FEATURE -->
                    <div class="feature-items">
                        <!-- ICON -->
                        <div class="icon-container hidden-sm"><img src="<?php print path_to_theme();?>/bootstrap_subtheme/studio/icons/økonomi.png" alt="økonomi" class="features-icon" /></div>

                        <div class="text-right">
                            <h4 class="main-color">Økonomi </h4>
                            <p>
                                Se dine omsætningtal, scan dine bilag og send det hele til din revisor. Spar tid og penge.
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
                            <h4 class="main-color">Rapporter</h4>
                            <p>
                                Få månedlige, ugentlige og daglige rapporter som du kan læse selv eller sende til din revisor.
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
                            <h4 class="main-color">Kasse</h4>
                            <p>
                                Opret produkter, registrer betalinger, opret faktura, lav gavekort og udskriv kvitteringer.
                            </p>
                        </div>

                    </div>
                    <!-- end Single Feature item -->

                    <!-- FEATURE -->
                    <div class="feature-items">
                        <!-- ICON -->
                        <div class="icon-container hidden-sm"><img src="<?php print path_to_theme();?>/bootstrap_subtheme/studio/icons/medarbejdere.png" alt="Medarbejdere" class="features-icon" /></div>

                        <div class="fetaure-right">
                            <h4 class="main-color">Medarbejdere</h4>
                            <p>
                                Opret dine medarbejdere og giv dem rettigheder. Registrer salg og aktiviteter per medarbejder.
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
                            <h4 class="main-color">Kvitteringer</h4>
                            <p>
                                Scan og gem kvitteringer så du får et fuldstændigt overblik over din økonomi uanset hvor i verden du er.
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
                <div class="title text-center"><h1>Man taler også om os i medierne</h1></div>
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
                            Jeg har fået en helt anden oplevelse af hvad et kasseapparat kan bruges til
                            <i class="fa fa-quote-right pull-right"></i>
                        </div>
                        <div class="white-separator"></div>

                        <!--  INFORMATION -->
                        <div class="testimonial-name">Stine Høyer Rasmussen</div>
                        <div class="testimonial-info">Owner, SecondStore, Vintage Clothing</div>
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
                    <div class="title-half"><h1>Styr på tingene</h1></div>
                    <div class="subtitle-half"><h5>og mere overskud til din forretning</h5></div>
                    <div class="separator-left"></div>
                </div>

                <div class="describe-details wow fadeInLeft animated" data-wow-offset="10" data-wow-duration="1.5s">
                    <p>
                        Uanset om du sælger kaffe, mad, cykler, bøger eller en ny frisure har du brug for en enkel løsning til at administrere din forretning. Vi har gjort Shopbox så enkel at den virker for de fleste erhvervsdrivende. Let at sætte op. Let at administrere. Og så virker det både online og offline.
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
                    <div class="title text-center"><h1>Facts om Shopbox</h1></div>
                    <div class="subtitle text-center "><h5>Dette vidste du måske ikke om os</h5></div>
                    <div class="separator text-center"></div>
                </div>

                <div class="funfacts-counter2 white-text">
                    <div class="col-sm-4">
                        <div class="statistic-counter">15</div>
                        <div class="statistic-text">Geeks</div>
                    </div>
                    <div class="col-sm-4">
                        <div class="statistic-counter">3</div>
                        <div class="statistic-text">År gammelt</div>
                    </div>
                    <div class="col-sm-4">
                        <div class="statistic-counter">100</div>
                        <div class="statistic-text">% kundefokuseret</div>
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
                <div class="title text-center"><h1>Size matters</h1></div>
                <div class="subtitle text-center "><h5>...fra gratis til rimeligt</h5></div>
                <div class="separator text-center"></div>
            </div>

            <div class="price-2">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <ul class="plan">
                        <li class="plan-name">
                            Free
                        </li>
                        <li class="plan-price">
                            <strong>100</strong> transaktioner per måned
                        </li>
                        <li>
                            <strong>1</strong> medarbejder
                        </li>
                        <li>
                            <strong>Shopbox branded</strong>
                        </li>
                        <li>
                            <strong>Mail</strong> support
                        </li>
                        <li class="plan-action">
                            <strong style="font-size: 35px;">Gratis</strong>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-4 col-xs-12">
                    <ul class="plan wow fadeIn animated animated" data-wow-offset="120" data-wow-duration="1.5s" style="visibility: visible; -webkit-animation-duration: 1.5s;">
                        <li class="plan-name">
                            Pro
                        </li>
                        <li class="plan-price">
                            <strong>10.000</strong> transaktioner per måned
                        </li>
                        <li>
                            <strong>10</strong> medarbejdere
                        </li>
                        <li>
                            <strong>Dit brand</strong>
                        </li>
                        <li>
                            <strong>Hotline 9 – 16</strong> support
                        </li>
                        <li class="plan-action">
                            <strong style="font-size: 35px;">399 kr.</strong>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-4 col-xs-12">
                    <ul class="plan wow fadeInRight animated animated" data-wow-offset="120" data-wow-duration="1.5s" style="visibility: visible; -webkit-animation-duration: 1.5s;">
                        <li class="plan-name">
                            Mighty
                        </li>
                        <li class="plan-price">
                            <strong>Ubegrænset</strong> transaktioner
                        </li>
                        <li>
                            <strong>Ubegrænset</strong> medarbejdere
                        </li>
                        <li>
                            <strong>Dit brand</strong>
                        </li>
                        <li>
                            <strong>Hotline 24/7</strong> support
                        </li>
                        <li class="plan-action">
                            <strong style="font-size: 35px;">999 kr.</strong>
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
                    <h4 class="text-white">Hvad er Shopbox?</h4>
                    <p class="text-white">
                        Shopbox samler hele din forretning i en simpel mobil App. Shopbox har en kasse (POS), en kundeklub og en simpel økonomi og personale funktion. Og du kan få den gratis på din App store. Du har én forretning – hvorfor ikke bare have én app?
                    </p>
                </div><!--end feature-->
            </div>

            <div class="col-sm-4 clearfix">
                <div class="feature text-center  wow fadeIn animated" data-wow-offset="120" data-wow-duration="1.5s">
                    <i class="fa fa-heart"></i>
                    <h4 class="text-white">Hvad vi tror på</h4>
                    <p class="text-white">
                        Vi tror på ubegrænsede muligheder, super kundeservice og enkle løsninger. Dog vigtigst af alt tror vi på at gode ting sker med kreative og ambitiøse kollegaer. Vi er ikke her for at gøre tingene bedre. Vi er her for at skabe nye standarder.
                    </p>
                </div><!--end feature-->
            </div>

            <div class="col-sm-4 clearfix">
                <div class="feature text-center  wow fadeInRight animated" data-wow-offset="120" data-wow-duration="1.5s">
                    <i class="fa fa-users"></i>
                    <h4 class="text-white">Bliv partner</h4>
                    <p class="text-white">
                        Hvis du har et netværk af butikker eller adgang til mange mindre virksomheder, kan vi skabe noget sammen. Vi distribuerer gennem banker, ISP’er, brancheorganisationer, og software udbydere.. Hvis du vil høre mere om vores partner program så klik <a href="mailto:cz@shopbox.com">her</a>
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
            <div class="title text-center"><h1>Management</h1></div>
            <div class="subtitle text-center "><h5>Vi er spiller også bordtennis</h5></div>
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
                        <div class="title text-center"><h1>Giv os din mailadresse</h1></div>
                        <div class="title text-center"><h1>Så giver vi dig Shopbox Pro gratis i 30 dage</h1></div>
                        <div class="subtitle text-center "><h5>(du kan også bare få vores gratis app)</h5></div>
                        <div class="separator text-center"></div>
                    </div>
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="subscribtion-form center-block wow bounceIn animated" data-wow-offset="120" data-wow-duration="1.5s">
                            <form id="request2" class="subscription-form mailchimp form-inline" role="form" novalidate="true" action="/contact" method="POST">

                                <!-- SUBSCRIPTION SUCCESSFUL OR ERROR MESSAGES -->
                                <h6 class="subscription-success"></h6>
                                <h6 class="subscription-error"></h6>
                                <input type="email" name="email" id="subscriber-email1" placeholder="Din mailadresse" class="form-control subscribe-input input-lg">
                                <!-- SUBSCRIBE BUTTON -->
                                <button id="subscribe-button2" class="btn btn-primary btn-lg" type="submit" data-loading-text="Sender...">Send</button>

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
                <div class="title text-center"><h1>Kontakt os</h1></div>
                <div class="subtitle text-center "><h5>Vi vil så gerne høre fra dig</h5></div>
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
                                    <input type="text" class="form-control " name="name" id="name" placeholder="Navn">
                                </div>
                                <div class="col-md-6">
                                    <input type="text"  class="form-control " name="email" id="email" placeholder="Email">
                                </div>
                                <div class="col-md-12">
                                    <input class="form-control " id="subject" type="text" name="subject" placeholder="Emne">
                                    <textarea class="form-control " id="msg" rows="5" placeholder="Besked"></textarea>
                                    <button class="btn btn-primary btn-lg" type="submit" id="submit" name="submit"  data-loading-text="Loading..."><i class="fa fa-send"></i> Send besked</button>
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
