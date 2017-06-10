<!DOCTYPE html>

<html> 

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  
    <title>ESU</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $this->config->base_url();?>assets/images/logo.png">
   
    <!-- Bootstrap Styles -->
    <link type="text/css" rel="stylesheet" href="<?php echo $this->config->base_url();?>assets/css/bootstrap.css" media="screen">
    <!-- Awesome Icons Styles -->
    <link type="text/css" rel="stylesheet" href="<?php echo $this->config->base_url();?>assets/css/font-awesome.css" media="screen">
    <!-- Awesome Icons Styles -->
    <link type="text/css" rel="stylesheet" href="<?php echo $this->config->base_url();?>assets/css/et-line.css" media="screen">
    <!-- Css Styles -->
    <link type="text/css" rel="stylesheet" href="<?php echo $this->config->base_url();?>assets/style.css" media="screen">
    <link type="text/css" rel="stylesheet" href="<?php echo $this->config->base_url();?>assets/style-portfolio.css" media="screen">
   
    <link type="text/css" rel="stylesheet" href="<?php echo $this->config->base_url();?>assets/css/animate.min.css" media="screen">
    <link type="text/css" rel="stylesheet" href="<?php echo $this->config->base_url();?>assets/css/rotator.css" media="screen">
    <!-- Google Font Styles -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat+Subrayada:700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Nothing+You+Could+Do' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

    <!-- Support for HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->

    <!-- Enable media queries on older bgeneral_rowsers -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>  <![endif]-->

</head>
<body id="custom">

    <div class="animationload">
    <div class="loader">Loading...</div>
    </div>

    <div class="makeborder-top"></div>
    <div class="makeborder-bottom"></div>
    <div class="makeborder-left"></div>
    <div class="makeborder-right"></div>

    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form id="searchform" role="form">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <input type="text" class="form-control" placeholder="What you are looking for?">
                </form>
            </div>
        </div>
    </div>

    <div id="wrapper">
    <?php $this->load->view("header"); ?>
        <div id="page_header">
            <div id="parallax" class="parallax bgback bg" style="background-image: url('<?php echo $this->config->base_url();?>assets/images/5.jpg');" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20"></div>
            <div class="container text-center header-part">
                <h2 class="header-text"><span class="rotate">we, you </span>  build a <span class="rotate"> building, Live </span></h2>
                <div class="angle-down">
                    <a href="#about">
                      <i class="fa fa-angle-double-down fa-4x wow animated fadeInDown" data-wow-iteration="infinite" ></i>
                    </a>
                </div>
            </div>
        </div><!-- end page_header -->

        <div class="white-wrapper">
         <div id="about">
            <div class="container">
                 <div class="title text-center">
                    <h3 class="title-text"><?php echo lang("about"); ?></h3>
                    
                    <em class="lead">In light of Egypt's attractive experience in attracting investors from all over the world in the commercial and industrial activities and the sound environment they offer, especially in the real estate and real estate fields, the board members have a desire to enter the Egyptian market</em>
                    <hr>
                </div>  
                <ul class="lead">
                    <li>A Saudi-Saudi joint stock company registered with the Ministry of Commerce and Industry in Commercial Registration No. 93253</li>
                    <li>our main activity is investment and urban development</li>
                    <li>The authorized capital is LE 85 million</li>
                    <li>The Board of Directors is headed by Sheikh Awad Abdullah bin Laden</li>
                    <li>The company has aspirations to provide real estate and urban products to suit all levels of living, including commercial and residential, and provide all marketing services inside and outside Egypt</li>
                </ul>
            </div>
         </div>
            <div id="projects">
            <div class="container">
                <div class="title text-center">
                    <h3 class="title-text"><?php echo lang("projects"); ?></h3>
                    <em class="lead"><?php echo lang("projects_quote"); ?> </em>
                    <hr>
                </div>

                <div class="row">

                <div class="portfolio-items">
                    <div class="item-blog col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <ul>
                        <li class="img_item">
                            <div class="caption8 ctn_blue">
                                <h3>Blue</h3>
                                <p>Vestibulum ante ipsum primis in fauci bus orci luctus et ultrices posuere cubilia. Ut in magna eget quam biben dum rhoncus ipsum.</p>
                                <a href="<?php echo $this->config->base_url();?>index.php/Dashboard/project" class="pf_button green">Details</a>
                            </div>
                            <img class="img-responsive"  src="<?php echo $this->config->base_url();?>assets/images/5.jpg" alt="" />
                        </li>
                    </ul>
                        </div>
                        <div class="item-blog col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <ul>
                        <li class="img_item">
                            <div class="caption8 ctn_green">
                                <h3>Green</h3>
                                <p>Vestibulum ante ipsum primis in fauci bus orci luctus et ultrices posuere cubilia. Ut in magna eget quam biben dum rhoncus ipsum.</p>
                                <a href="<?php echo $this->config->base_url();?>index.php/Dashboard/project" class="pf_button">Details</a>
                            </div>
                            <img class="img-responsive"  src="<?php echo $this->config->base_url();?>assets/images/5.jpg" alt="" />
                        </li>
                        </ul>
                        </div>
                        <div class="item-blog col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <ul>
                        <li class="img_item">
                            <div class="caption8 ctn_brown">
                                <h3>Brown</h3>
                                <p>Vestibulum ante ipsum primis in fauci bus orci luctus et ultrices posuere cubilia. Ut in magna eget quam biben dum rhoncus ipsum.</p>
                                <a href="<?php echo $this->config->base_url();?>index.php/Dashboard/project" class="pf_button">Details</a>
                            </div>
                            <img class="img-responsive"  src="<?php echo $this->config->base_url();?>assets/images/5.jpg" alt="" />
                        </li>
                        </ul>
                        </div>
                        <div class="item-blog col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <ul>
                        <li class="img_item">
                            <div class="caption8 ctn_darkslategray">
                                <h3>Darkslategray</h3>
                                <p>Vestibulum ante ipsum primis in fauci bus orci luctus et ultrices posuere cubilia. Ut in magna eget quam biben dum rhoncus ipsum.</p>
                                <a href="<?php echo $this->config->base_url();?>index.php/Dashboard/project" class="pf_button">Details</a>
                            </div>
                            <img class="img-responsive"  src="<?php echo $this->config->base_url();?>assets/images/5.jpg" alt="" />
                        </li>
                        </ul>
                        </div>
                        <div class="item-blog col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <ul>
                        <li class="img_item">
                            <div class="caption8 ctn_indianred">
                                <h3>Indianred</h3>
                                <p>Vestibulum ante ipsum primis in fauci bus orci luctus et ultrices posuere cubilia. Ut in magna eget quam biben dum rhoncus ipsum.</p>
                                <a href="<?php echo $this->config->base_url();?>index.php/Dashboard/project" class="pf_button orange">Details</a>
                            </div>
                            <img class="img-responsive"  src="<?php echo $this->config->base_url();?>assets/images/5.jpg" alt="" />
                        </li>
                        </ul>
                        </div>
                        <div class="item-blog col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <ul>
                        <li class="img_item">
                            <div class="caption8 ctn_white">
                                <h3>White</h3>
                                <p>Vestibulum ante ipsum primis in fauci bus orci luctus et ultrices posuere cubilia. Ut in magna eget quam biben dum rhoncus ipsum.</p>
                                <a href="<?php echo $this->config->base_url();?>index.php/Dashboard/project" class="pf_button">Details</a>
                            </div>
                            <img class="img-responsive"  src="<?php echo $this->config->base_url();?>assets/images/5.jpg" alt="" />
                        </li>
                        </ul>
                        </div>
                    </div><!-- End of .portfolio-items -->

                </div><!-- end row -->
            </div><!-- end portfolio_wrapper -->
            </div>

            <br>

            <div id="Case_Area">
                <div class="wow animated fadeInLeft">
                <div class="title text-center ">
                    <h3 class="title-text"><?php echo lang("job_vacancies"); ?></h3>
                    <hr>
                    <em class="lead" ><?php echo lang("we_hare_hiring"); ?>... </em>
                </div><br>
                </div>
                <div class="container pm-containerPadding-top-80 pm-containerPadding-bottom-40">
                    <div class="row">

                    
                        <div class="col-lg-4 col-md-4 col-sm-12wow fadeInUp animated" data-wow-delay="0.3s" data-wow-offset="50" data-wow-duration="1s">
                            <div class="block-one block">
                            <img src="<?php echo $this->config->base_url();?>assets/images/icon2.png" width="200" class="img-responsive pm-inline" alt="icon" />

                            <h6 class="pm-column-title">IT Specialist</h6>
                            <div class="caret-down"><i class="fa fa-caret-down"></i></div>
                            <p>We are looking for a 3-5 years experienced IT specialist for our IT system</p>

                            <div class="btn-blk"><a href="#" class="pm-rounded-btn">view Job</a>
                            </div>

                        </div>
                        </div>
                        <!-- Column 2 end -->
                    
                        <div class="col-lg-4 col-md-4 col-sm-12wow fadeInUp animated" data-wow-delay="0.6s" data-wow-offset="50" data-wow-duration="1s">
                            <div class="block-one block">
                            <img src="<?php echo $this->config->base_url();?>assets/images/icon2.png" width="200" class="img-responsive pm-inline" alt="icon" />

                            <h6 class="pm-column-title">IT Specialist</h6>
                            <div class="caret-down"><i class="fa fa-caret-down"></i></div>
                            <p>We are looking for a 3-5 years experienced IT specialist for our IT system</p>

                            <div class="btn-blk"><a href="#" class="pm-rounded-btn">view Job</a>
                            </div>

                        </div>
                        </div>
                        <!-- Column 2 end -->
                    
                    
                        <div class="col-lg-4 col-md-4 col-sm-12wow fadeInUp animated" data-wow-delay="0.9s" data-wow-offset="50" data-wow-duration="1s">
                            <div class="block-one block">
                            <img src="<?php echo $this->config->base_url();?>assets/images/icon2.png" width="200" class="img-responsive pm-inline" alt="icon" />

                            <h6 class="pm-column-title">IT Specialist</h6>
                            <div class="caret-down"><i class="fa fa-caret-down"></i></div>
                            <p>We are looking for a 3-5 years experienced IT specialist for our IT system</p>

                            <div class="btn-blk"><a href="#" class="pm-rounded-btn">view Job</a>
                            </div>

                        </div>
                        </div>
                        <!-- Column 2 end -->
                    


                    </div>
                </div>
            </div>

        <!-- Team -->

        <div id="team">
           <div class="container">
                 <div class="title text-center">
                    <h3 class="title-text"><?php echo lang("our_live_projects"); ?></h3>

                    <hr>
                </div>
  <div id="myCarousel" class="carousel slide"  data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="<?php echo $this->config->base_url();?>assets/images/2.jpg" class="img-responsive" style="max-height: 400px;" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p>
        </div>
      </div>

      <div class="item">
        <img src="<?php echo $this->config->base_url();?>assets/images/5.jpg" class="img-responsive" style="max-height: 400px;" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>Cairo</h3>
          <p>Our First project in cairo</p>
        </div>
      </div>
    
 
  
    </div>

    <!-- Left and right controls -->
    
  </div>

</div>

        </div>

        <!-- End of Team -->
        <!-- Contact -->

            <div id="contact">
                <div class="title text-center">
                    <h3 class="title-text"><?php echo lang("contact_us"); ?></h3>

                    <em class="lead"><?php echo lang("contact_us_quote"); ?></em>
                    <hr>
                </div>
            </div>
            <div class="wow animated zoomIn" data-wow-delay="1s" style="margin-bottom: -8px;">
                <iframe class="maps " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.664063521107!2d91.83379900000003!3d24.909437999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37505558dd0be6a1%3A0x65c7e47c94b6dc45!2sTechnext!5e0!3m2!1sen!2sbd!4v1422512775544"  height="350" style="border:0"></iframe>
            </div>

            <footer class="footer">
                <div class="container">
                 
                    <div class="widget col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="title">
                            <h3>Contact Us.</h3>
                        </div>
                        <div class="contact_widget row">
                            <div id="message"></div>
                            <form id="contactform" action="contact.php" name="contactform" method="post">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <input type="text" name="name" id="name" required="required" class="form-control" placeholder="Name">
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <input type="text" name="email" id="email" required="required" class="form-control" placeholder="Email Address">
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <input type="text" name="subject" id="subject" required="required" class="form-control" placeholder="Subject">
                                </div>

                                <div class="clearfix"></div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" name="comments" required="required" id="comments" rows="6" placeholder="Message"></textarea>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <button type="submit" value="SEND" id="submit" class="btn btn-lg btn-primary">SEND</button>
                                </div>
                            </form>
                        </div> <!-- end contact_widget -->
                    </div><!-- end widget -->

                    <div class="widget col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="title">
                            <h3>Keep in Touch.</h3>
                        </div>
                        <ul class="contact_details">
                            <li><i class="fa fa-map-marker"></i> <span>15 Springfield Way Hythe</span></li>
                            <li><i class="fa fa-mobile-phone"></i> <span>(+ 00) 1-714-252-0026</span></li>
                            <li><i class="fa fa-envelope"></i> <span>support@law.com</span></li>
                        </ul>
                        <div class="social pull-left">
                            <span><a title="Twitter" href="#"><i class="fa fa-twitter"></i></a></span>
                            <span><a title="Facebook" href="#"><i class="fa fa-facebook"></i></a></span>
                            <span><a title="Google Plus" href="#"><i class="fa fa-google-plus"></i></a></span>
                            <span><a title="Skype" href="#"><i class="fa fa-skype"></i></a></span>
                            <span><a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a></span>
                            <span><a title="Youtube" href="#"><i class="fa fa-youtube"></i></a></span>
                            <span><a title="Pinterest" href="#"><i class="fa fa-pinterest"></i></a></span>
                        </div><!-- end social -->
                    </div><!-- end widget -->
                </div><!-- end container -->
            </footer><!-- end footer -->

          
        </div>
    </div>

            <!-- Main Scripts-->
            <script src="<?php echo $this->config->base_url();?>assets/js/jquery.js"></script>
            <script src="<?php echo $this->config->base_url();?>assets/js/bootstrap.js"></script>
            <script src="<?php echo $this->config->base_url();?>assets/js/custom.js"></script>
            <script src="<?php echo $this->config->base_url();?>assets/js/jquery.nav.js"></script>
            <script src="<?php echo $this->config->base_url();?>assets/js/wow.min.js"></script>
            <script src="<?php echo $this->config->base_url();?>assets/js/rotator.js"></script>


            <script type="text/javascript">
                          $('a').click(function(){
                        $('html, body').animate({
                            scrollTop: $( $.attr(this, 'href') ).offset().top
                        }, 500);
                        return false;
                    });
            </script>
            <script>
                $(document).ready(function() {
                  $('#nav').onePageNav();

                  $('.do').click(function(e) {
                    $('#section-4').append('<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>');
                    e.preventDefault();
                  });
                });
            </script>
            <script type="text/javascript">$(document).on('click', '.panel-heading span.clickable', function (e) {
                var $this = $(this);
                if (!$this.hasClass('panel-collapsed')) {
                    $this.parents('.panel').find('.panel-body').slideUp();
                    $this.addClass('panel-collapsed');
                    $this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
                } else {
                    $this.parents('.panel').find('.panel-body').slideDown();
                    $this.removeClass('panel-collapsed');
                    $this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
                }
            });
            $(document).on('click', '.panel div.clickable', function (e) {
                var $this = $(this);
                if (!$this.hasClass('panel-collapsed')) {
                    $this.parents('.panel').find('.panel-body').slideUp();
                    $this.addClass('panel-collapsed');
                    $this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
                } else {
                    $this.parents('.panel').find('.panel-body').slideDown();
                    $this.removeClass('panel-collapsed');
                    $this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
                }
            });
            $(document).ready(function () {
                $('.panel-heading span.clickable').click();
                $('.panel div.clickable').click();
            });
        </script>
        <script>
            new WOW().init();
        </script>
        <script type="text/javascript">
            $(".rotate").textrotator({
            animation: "flip", // You can pick the way it animates when rotating through words. Options are dissolve (default), fade, flip, flipUp, flipCube, flipCubeUp and spin.
            separator: ",", // If you don't want commas to be the separator, you can define a new separator (|, &, * etc.) by yourself using this field.
            speed: 3000 // How many milliseconds until the next word show.
            });
        </script>
        <script type="text/javascript">
            $(function () {
            $('.navbar-collapse ul li a:not(.dropdown-toggle)').bind('click touchstart', function () {
              $('.navbar-toggle:visible').click();
            });
          });
        </script>
</body>
</html>
