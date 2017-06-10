<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ESU-project</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap and Font Awesome css-->
    <!-- we use cdn but you can also include local files located in css directory-->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Google fonts - Montserrat for headings, Cardo for copy-->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700|Cardo:400,400italic,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo $this->config->base_url();?>assets/css/style.default.css" id="theme-stylesheet">
    <!-- ekko lightbox-->
    <link rel="stylesheet" href="<?php echo $this->config->base_url();?>assets/css/ekko-lightbox.css">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo $this->config->base_url();?>assets/css/custom.css">
    <!-- Favicon-->
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $this->config->base_url();?>assets/images/logo.png">
   
  </head>
  <body data-spy="scroll" data-target="#navigation" data-offset="120">
    
    <header class="header">
      <div class="sticky-wrapper">
        <div role="navigation" class="navbar navbar-default">
          <div class="container">
            <div class="navbar-header">
             <a href="<?php echo $this->config->base_url();?>index.php/Dashboard" class="navbar-brand"><img src="<?php echo $this->config->base_url();?>assets/img/logo.png" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </header>
    
    <!-- intro-->
    <section id="intro" style="background-image: url('<?php echo $this->config->base_url();?>assets/img/ein-steig.jpg');" class="intro">      
      <div class="overlay"></div>
      <div class="content">
        <div class="container clearfix">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12">
              <h1>maadi buildings</h1>
              <p class="italic">I am a ready to be your portfolio, telling your stories and short presentations I am a ready to be your portfolio, telling your stories and short presentations.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <!-- /.navbar-->
    <!-- about-->
    <section id="about" class="text">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h2 class="heading">About project</h2>
            <p class="lead">This can be an about section.</p>
            <p>Impossible considered invitation him men instrument saw celebrated unpleasant. Put rest and must set kind next many near nay. He exquisite continued explained middleton am. Voice hours young woody has she think equal. Estate moment he at on wonder at season little. Six garden result summer set family esteem nay estate. End admiration mrs unreserved discovered comparison especially invitation. </p>
            <p>Delightful unreserved impossible few estimating men favourable see entreaties. She propriety immediate was improving. He or entrance humoured likewise moderate. Much nor game son say feel. Fat make met can must form into gate. Me we offending prevailed discovery. </p>
          </div>
        </div>
      </div>
    </section>
    <!-- Portfolio / gallery-->
    <section id="portfolio" class="gallery">
      <div class="container clearfix">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12 col-lg-8">
                <h2 class="heading">Portfolio</h2>
                <p>Put your portfolio or gallery images here for example. Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could cease green oh. </p>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <div class="box"><a href="<?php echo $this->config->base_url();?>assets/img/portfolio-1.jpg" title="" data-toggle="lightbox" data-gallery="portfolio" data-title="Portfolio image 1" data-footer="Some footer information">
                <img src="<?php echo $this->config->base_url();?>assets/img/portfolio-1.jpg" alt="" class="img-responsive"></a></div>
              </div>
              <div class="col-sm-4">
                <div class="box"><a href="<?php echo $this->config->base_url();?>assets/img/portfolio-2.jpg" title="" data-toggle="lightbox" data-gallery="portfolio" data-title="Portfolio image 2" data-footer="Some footer information">
                <img src="<?php echo $this->config->base_url();?>assets/img/portfolio-2.jpg" alt="" class="img-responsive"></a></div>
              </div>
              <div class="col-sm-4">
                <div class="box"><a href="<?php echo $this->config->base_url();?>assets/img/portfolio-3.jpg" title="" data-toggle="lightbox" data-gallery="portfolio" data-title="Portfolio image 3" data-footer="Some footer information">
                <img src="<?php echo $this->config->base_url();?>assets/img/portfolio-3.jpg" alt="" class="img-responsive"></a></div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <div class="box"><a href="<?php echo $this->config->base_url();?>assets/img/portfolio-4.jpg" title="" data-toggle="lightbox" data-gallery="portfolio" data-title="Portfolio image 4" data-footer="Some footer information">
                <img src="<?php echo $this->config->base_url();?>assets/img/portfolio-4.jpg" alt="" class="img-responsive"></a></div>
              </div>
              <div class="col-sm-4">
                <div class="box"><a href="<?php echo $this->config->base_url();?>assets/img/portfolio-5.jpg" title="" data-toggle="lightbox" data-gallery="portfolio" data-title="Portfolio image 5" data-footer="Some footer information">
                <img src="<?php echo $this->config->base_url();?>assets/img/portfolio-5.jpg" alt="" class="img-responsive"></a></div>
              </div>
              <div class="col-sm-4">
                <div class="box"><a href="<?php echo $this->config->base_url();?>assets/img/portfolio-6.jpg" title="" data-toggle="lightbox" data-gallery="portfolio" data-title="Portfolio image 6" data-footer="Some footer information">
                <img src="<?php echo $this->config->base_url();?>assets/img/portfolio-6.jpg" alt="" class="img-responsive"></a></div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <div class="box"><a href="<?php echo $this->config->base_url();?>assets/img/portfolio-7.jpg" title="" data-toggle="lightbox" data-gallery="portfolio" data-title="Portfolio image 7" data-footer="Some footer information">
                <img src="<?php echo $this->config->base_url();?>assets/img/portfolio-7.jpg" alt="" class="img-responsive"></a></div>
              </div></a>
              <div class="col-sm-4">
                <div class="box"><a href="<?php echo $this->config->base_url();?>assets/img/portfolio-8.jpg" title="" data-toggle="lightbox" data-gallery="portfolio" data-title="Portfolio image 8" data-footer="Some footer information">
                <img src="<?php echo $this->config->base_url();?>assets/img/portfolio-8.jpg" alt="" class="img-responsive"></a></div>
              </div></a>
              <div class="col-sm-4">
                <div class="box"><a href="<?php echo $this->config->base_url();?>assets/img/portfolio-9.jpg" title="" data-toggle="lightbox" data-gallery="portfolio" data-title="Portfolio image 9" data-footer="Some footer information">
                <img src="<?php echo $this->config->base_url();?>assets/img/portfolio-9.jpg" alt="" class="img-responsive"></a></div>
              </div></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Portfolio / gallery end-->
    <!-- text page-->

    <!-- text page end-->
    <!-- contact-->
   
    <div id="map"></div>
    <footer style="background-color: #111;" class="section-inverse">
    
    </footer>
    <!-- Javascript files-->
    <!-- jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo $this->config->base_url();?>assets/js/jquery-1.11.0.min.js"><\/script>')</script>
    <!-- Bootstrap CDN-->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- jQuery Cookie - For Demo Purpose-->
    <script src="<?php echo $this->config->base_url();?>assets/js/jquery.cookie.js"></script>
    <!-- Lightbox-->
    <script src="<?php echo $this->config->base_url();?>assets/js/ekko-lightbox.js"> </script>
    <!-- Sticky + Scroll To scripts for navbar-->
    <script src="<?php echo $this->config->base_url();?>assets/js/jquery.sticky.js"></script>
    <script src="<?php echo $this->config->base_url();?>assets/js/jquery.scrollTo.min.js"></script>
    <!-- google maps-->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;amp;sensor=false"></script>
    <script src="<?php echo $this->config->base_url();?>assets/js/gmaps.js"></script>
    <!-- main script-->
    <script src="<?php echo $this->config->base_url();?>assets/js/front.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
   
  </body>
</html>