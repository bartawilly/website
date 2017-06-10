	
 <div class="container">
            <header id="Home" class="header">
                <div class="menu-wrapper">
                    <nav id="navigation" class="navbar navbar-default" role="navigation">
                        <div class="navbar-inner">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <i class="fa fa-bars fa-2x"></i>
                                </button>
                                <a id="brand" class="navbar-brand" href="<?php echo $this->config->base_url();?>index.php/Dashboard"><img src="<?php echo $this->config->base_url();?>assets/images/logo.png" alt="Law"></a>
                            </div>
                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right" id="nav">
                                    <li class="current"><a href="#Home" title=""> <?php echo lang("home"); ?> 
                                    </a></li>
                                    <li><a href="#about" title=""><?php echo lang("about"); ?></a></li>
                                    <li><a href="#projects" title=""><?php echo lang("projects"); ?></a></li>
                                    <li><a href="#Case_Area" title=""><?php echo lang("job_vacancies"); ?></a></li>
                                    <li><a href="#team" title=""><?php echo lang("live"); ?></a></li>
                                    <li><a href="#contact" title=""><?php echo lang("contact_us"); ?></a></li>
									<li><a href="<?php echo $this->config->base_url();?>index.php/Dashboard/language" title="">
									<?php
									if($this->config->item('language') == "arabic"){
										echo "english";
									}
									else{
										echo "العربيه";
									}
									?>
									</a></li>
									
									
                                </ul>
                            </div><!-- end navbar-collapse collapse -->
                        </div><!-- nav -->
                    </nav><!-- end navigation -->
                </div><!-- menu wrapper -->
            </header><!-- end header -->
        </div><!-- end container -->