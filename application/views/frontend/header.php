<header>
  	<!-- Toolbar start -->
  		<div class="row toolbar hidden-xs bg-dark-gray">
  			<div class="container">
            	<div class="col-sm-10 col-xs-6">
          <a href="#"><span class="glyphicon glyphicon-envelope"></span>
contact@example.com</a>
				</div>
                <div class="col-sm-2 col-xs-6 hidden-xs search pull-right">
                        <a href="#" class="social-icon sc-icon-facebook"></a>
                        <a href="#" class="social-icon sc-icon-twitter2"></a>
                        <a href="#" class="social-icon sc-icon-skype"></a>
                </div>
			</div>
  		</div>
  	<!-- Toolbar end -->
  	<!-- header-main start -->            
    <div class="row header-main">
        
              <div class="container">
              
              	  <div class="col-lg-3 col-md-3 col-sm-12">
                      <a href="index.php" style="color:e02222;">Zamzam</a>
                  </div>
                  
                  <!-- Ads Banner Start -->
                  <div class="col-lg-9 col-md-9 col-sm-12 padding-top15">
                     <div class="row">
                  <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 white bg-deepocean height-topown wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                  
                  		<div class="col-xs-2 header-top-icon">
                        	 <span class="fa fa-clock-o fa-3x sunflower"></span>
                        </div>
                        
                        <div class="col-xs-10 header-top-icon3" align="center">
                            <address>
                              <strong style="font-size:16px;">24/7 Customer Support</strong><br>
                              <a href="tel:+07-557-872841" style="font-size:22px;" class="sunflower"><?php echo $contact_info[0]->primary_phone; ?></a>
                            </address>
                        </div>

                  </div>
                  
                  <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 bg-deepocean bg-orange height-topown wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                  
                  
                  		<div class="col-xs-2 header-top-icon2">
                           <span class="fa fa-phone fa-3x sunflower"></span>
                        </div>
                        
                        <div class="col-xs-10">
                        	<div class="row">
                            	 <div class="col-xs-6">
                                 <strong style="color:#fff; font-size:14px;">Berkshire:</strong><br>
                         		 <span class="finn"><?php echo $contact_info[0]->secondary_phone1; ?></span>
                                 </div>
                                 <div class="col-xs-6">
                                 <strong style="color:#fff; font-size:14px;">Buckinghamshire:</strong><br>
                          <span class="finn"><?php echo $contact_info[0]->secondary_phone2; ?></span>
                                 </div>
                            </div>
                            <div class="row">
                            	 <div class="col-xs-6">
                                 <strong style="color:#fff; font-size:14px;">Surrey:</strong><br>
                          <span class="finn"><?php echo $contact_info[0]->secondary_phone3; ?></span>
                                 </div>
                                 <div class="col-xs-6">
                                 <strong style="color:#fff; font-size:14px;">Oxfordshire</strong><br>
                          <span class="finn"><?php echo $contact_info[0]->secondary_phone4; ?></span>
                                 </div>
                            
                            </div>
                        </div>

                  </div>
                  
            </div>
                  </div>
                  <!-- Ads Banner End -->
              
              </div>
              
             <!-- headerbar start -->
                <div class="row headerbar">
                    <div class="container">
                        <!-- Center MainMenu start -->
                            <!-- Navbar Start -->
                                <nav class="navbar navbar-default megamenu">
                                  <button type="button" data-toggle="collapse" data-target="#navbar-collapse-2" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                                  <div id="navbar-collapse-2" class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav">
                            
                              <!-- MegaMenu Start -->
                                <li class="dropdown active megamenu-fw"><a href="<?php echo base_url(); ?>">Home</a></li>
                                <li class="dropdown"> <a href="<?php echo base_url(); ?>services">Services</a></li>
                                <li class="dropdown"> <a href="#">Domestic Clean </a>
                                </li>
                                <li class="dropdown"> <a href="#">Office Clean</a>
                                </li>
                                <li class="dropdown"> <a href="#">End of Tenancy Cleaning</a>
                                </li>
                                <li class="dropdown"> <a href="#">Carpet Cleaning</a>
                                </li>
                                <li class="dropdown"> <a href="#">Removals</a>
                                </li>
                                <li class="dropdown"> <a href="#">Shop</a>
                                </li>
                                <li class="dropdown"> <a href="<?php echo base_url(); ?>contact">Contact Us</a>
                                </li>
                            </ul>
                                  </div>
                                </nav>
                                <!-- Navbar end -->
                        <!-- Center MainMenu end -->
                    </div>
                </div>
             <!-- headerbar end --> 
            
     </div>
     <!-- header-main end --> 
   </header>