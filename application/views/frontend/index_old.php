<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from demo.artofthemes.com/html/proflex/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Nov 2015 15:38:29 GMT -->
<head>
    <title>Zamzam Cleaners</title>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="ProFlex Powerful MultiPurpose Html Template">
    <meta name="author" content="ArtofThemes">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>frontend/css/bootstrap.min.css">
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>frontend/css/navbar-news.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>frontend/css/color/red.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>frontend/css/styles.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>frontend/css/header-fullwidth.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>frontend/css/tools.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>frontend/css/footer-dark.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>frontend/css/socialmediaicons.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>frontend/css/responsive-news.css">
    
    <!-- MegaMenu styles-->
    <link href="<?php echo base_url(); ?>frontend/css/megamenu.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>frontend/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

        <!--[if lte IE 7]><script src="js/socialmediaicons-lte-ie7.js"></script><![endif]-->

    <!-- LOAD JQUERY LIBRARY -->
	<script type="text/javascript" src="<?php echo base_url(); ?>frontend/js/jquery-1.11.3.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false" 
          type="text/javascript"></script>
    <!-- MEGAFOLIO PRO GALLERY CSS JS FILES  -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>frontend/megafolio/css/settings.css" media="screen" />
	<script type="text/javascript" src="<?php echo base_url(); ?>frontend/megafolio/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>frontend/megafolio/js/jquery.themepunch.megafoliopro.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>frontend/megafolio/fancybox/jquery.fancybox62ba.css?v=2.1.3" type="text/css" media="screen" />
	<script type="text/javascript" src="<?php echo base_url(); ?>frontend/megafolio/fancybox/jquery.fancybox.pack62ba.js?v=2.1.3"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>frontend/megafolio/fancybox/helpers/jquery.fancybox-media3447.js?v=1.0.5"></script>
    
    <!-- LOADING FONTS AND ICONS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>frontend/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>frontend/revolution/fonts/font-awesome/css/font-awesome.min.css">
    
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>frontend/revolution/css/settings.css">
    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>frontend/revolution/css/layers.css">
        
    <!-- REVOLUTION NAVIGATION STYLES -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>frontend/revolution/css/navigation.css">
    
    <!-- Favicons -->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>frontend/images/favicon.ico">
		
    
    <!-- THE SHOWBIZ STYLES -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>frontend/showbizpro/css/settings.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>frontend/css/style-showbizpro.css" media="screen" />

	<!-- THE SHOWBIZ JS FILES  -->
	<!--<script type="text/javascript" src="showbizpro/js/jquery.themepunch.tools.min.js"></script>-->				
	<script type="text/javascript" src="<?php echo base_url(); ?>frontend/showbizpro/js/jquery.themepunch.showbizpro.min.js"></script>

	<!-- THE FANYCYBOX ASSETS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>frontend/showbizpro/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
	<!--<script type="text/javascript" src="showbizpro/fancybox/jquery.fancybox.pack.js"></script> It must be disable for youtube and vimeo videos to inside the megafolio-->
        
<!--ACTIVATE THE SHOWBIZPRO START-->
<script type="text/javascript">

				jQuery(document).ready(function() {

					jQuery('#example1').showbizpro({
						dragAndScroll:"on",
						visibleElementsArray:[4,3,2,1],
						carousel:"off",
						entrySizeOffset:0,
						allEntryAtOnce:"off",
						rewindFromEnd:"on",
						autoPlay:"on",
						delay:5000,						
						speed:1200,
						easing:'Back.easeOut'
					});
					
					jQuery('#logos').showbizpro({
						dragAndScroll:"on",
						visibleElementsArray:[4,3,2,1],
						carousel:"on",
						entrySizeOffset:0,
						allEntryAtOnce:"off",
						speed:1200,
						autoPlay:"on",
						rewindFromEnd:"on",
						delay:5000,
						easing:'Back.easeOut'
					});

					// THE FANCYBOX PLUGIN INITALISATION
					jQuery(".fancybox").fancybox();

				});

</script>
<!--ACTIVATE THE SHOWBIZPRO END-->    
    
</head>
  <body>
  <!-- header start -->
  	<?php include('header.php'); ?>
   
    <!-- header end -->
  	<!-- showcase start -->
       <div class="main" role="main">
      	
      	<!-- Content start -->
      	<div class="row">
  		<div class="row showcase" style="color:#000000">	
        <!--
		#################################
			- REVOLUTION SLIDER START -
		#################################
		-->
					
					
                	<div class="col-md-9" style="margin:0; padding:0;">
					<div id="rev_slider_34_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container corporate" data-alias="news-gallery34" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
				<!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
					<div id="rev_slider_34_1" class="rev_slider fullwidthabanner" style="display:none; width:75%;" data-version="5.0.7">
						<ul>	<!-- SLIDE  -->
							<li data-index="rs-129" data-transition="parallaxvertical" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="<?php echo base_url() ?>frontend/images/corporate/corporate1-100x50.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="<?php echo $slider_raw[0]->heading; ?>" data-description="<?php echo $slider_raw[0]->discription; ?>">
								<!-- MAIN IMAGE -->
								<img src="uploads/<?php echo $slider_raw[0]->image; ?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
								<!-- LAYERS -->

								<!-- LAYER NR. 1 -->
								<div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-129-layer-3" 
									 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
												data-width="full"
									data-height="full"
									data-whitespace="normal"
									data-transform_idle="o:1;"
						 
									 data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
									 data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
									data-start="1000" 
									data-basealign="slide" 
									data-responsive_offset="on" 

									
									style="z-index: 5;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 1.00);"> 
								</div>

								<!-- LAYER NR. 2 -->
								<div class="tp-caption Newspaper-Title   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-129-layer-1" 
									 data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" 
									 data-y="['top','top','top','top']" data-voffset="['165','135','105','130']" 
												data-fontsize="['50','50','50','30']"
									data-lineheight="['55','55','55','35']"
									data-width="['600','600','600','420']"
									data-height="none"
									data-whitespace="normal"
									data-transform_idle="o:1;"
						 
									 data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
									 data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
									 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
									 data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
									data-start="1000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 

									
									style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;"><?php echo $slider_raw[0]->discription; ?>
								</div>

								<!-- LAYER NR. 3 -->
								<div class="tp-caption Newspaper-Subtitle   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-129-layer-2" 
									 data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" 
									 data-y="['top','top','top','top']" data-voffset="['140','110','80','100']" 
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
						 
									 data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
									 data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
									 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
									 data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
									data-start="1000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 

									
									style="z-index: 7; white-space: nowrap;"><?php echo $slider_raw[0]->heading; ?> 
								</div>

								<!-- LAYER NR. 4 -->
								<div class="tp-caption Newspaper-Button rev-btn  rs-parallaxlevel-0" 
									 id="slide-129-layer-5" 
									 data-x="['left','left','left','left']" data-hoffset="['53','53','53','30']" 
									 data-y="['top','top','top','top']" data-voffset="['361','331','301','245']" 
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
										data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
										data-style_hover="c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
						 
									 data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
									 data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
									 data-mask_in="x:0px;y:0px;" 
									 data-mask_out="x:0;y:0;" 
									data-start="1000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 
									data-responsive="off"
									
									style="z-index: 8; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">READ MORE 
								</div>
							</li>
							<!-- SLIDE  -->
							<li data-index="rs-130" data-transition="parallaxvertical" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="<?php echo base_url(); ?>frontend/images/corporate/corporate2-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="<?php echo $slider_raw[1]->heading; ?>" data-description="<?php echo $slider_raw[1]->heading; ?>">
								<!-- MAIN IMAGE -->
								<img src="uploads/<?php echo $slider_raw[1]->image; ?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
								<!-- LAYERS -->

								<!-- LAYER NR. 1 -->
								<div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-130-layer-3" 
									 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
												data-width="full"
									data-height="full"
									data-whitespace="normal"
									data-transform_idle="o:1;"
						 
									 data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
									 data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
									data-start="1000" 
									data-basealign="slide" 
									data-responsive_offset="on" 

									
									style="z-index: 5;background-color:rgba(0, 0, 0, 0.5);border-color:rgba(0, 0, 0, 1.00);"> 
								</div>

								<!-- LAYER NR. 2 -->
								<div class="tp-caption Newspaper-Title   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-130-layer-1" 
									 data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" 
									 data-y="['top','top','top','top']" data-voffset="['165','135','105','130']" 
												data-fontsize="['50','50','50','30']"
									data-lineheight="['55','55','55','35']"
									data-width="['600','600','600','420']"
									data-height="none"
									data-whitespace="normal"
									data-transform_idle="o:1;"
						 
									 data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
									 data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
									 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
									 data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
									data-start="1000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 

									
									style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;"><?php echo $slider_raw[1]->discription; ?>
								</div>

								<!-- LAYER NR. 3 -->
								<div class="tp-caption Newspaper-Subtitle   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-130-layer-2" 
									 data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" 
									 data-y="['top','top','top','top']" data-voffset="['140','110','80','100']" 
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
						 
									 data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
									 data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
									 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
									 data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
									data-start="1000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 

									
									style="z-index: 7; white-space: nowrap;"><?php echo $slider_raw[1]->heading; ?>
								</div>

								<!-- LAYER NR. 4 -->
								<div class="tp-caption Newspaper-Button rev-btn  rs-parallaxlevel-0" 
									 id="slide-130-layer-5" 
									 data-x="['left','left','left','left']" data-hoffset="['53','53','53','30']" 
									 data-y="['top','top','top','top']" data-voffset="['361','331','301','245']" 
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
										data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
										data-style_hover="c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
						 
									 data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
									 data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
									 data-mask_in="x:0px;y:0px;" 
									 data-mask_out="x:0;y:0;" 
									data-start="1000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 
									data-responsive="off"
									
									style="z-index: 8; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">READ MORE 
								</div>
							</li>
							<!-- SLIDE  -->
							<li data-index="rs-131" data-transition="parallaxvertical" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="<?php echo base_url(); ?>frontend/images/corporate/corporate3-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="<?php echo $slider_raw[2]->heading; ?>" data-description="<?php echo $slider_raw[2]->discription; ?>">
								<!-- MAIN IMAGE -->
								<img src="uploads/<?php echo $slider_raw[2]->image; ?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
								<!-- LAYERS -->

								<!-- LAYER NR. 1 -->
								<div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-131-layer-3" 
									 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
												data-width="full"
									data-height="full"
									data-whitespace="normal"
									data-transform_idle="o:1;"
						 
									 data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
									 data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
									data-start="1000" 
									data-basealign="slide" 
									data-responsive_offset="on" 

									
									style="z-index: 5;background-color:rgba(0, 0, 0, 0.5);border-color:rgba(0, 0, 0, 1.00);"> 
								</div>

								<!-- LAYER NR. 2 -->
								<div class="tp-caption Newspaper-Title   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-131-layer-1" 
									 data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" 
									 data-y="['top','top','top','top']" data-voffset="['165','135','105','130']" 
												data-fontsize="['50','50','50','30']"
									data-lineheight="['55','55','55','35']"
									data-width="['600','600','600','420']"
									data-height="none"
									data-whitespace="normal"
									data-transform_idle="o:1;"
						 
									 data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
									 data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
									 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
									 data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
									data-start="1000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 

									
									style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;"><?php echo $slider_raw[2]->discription; ?>
								</div>

								<!-- LAYER NR. 3 -->
								<div class="tp-caption Newspaper-Subtitle   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-131-layer-2" 
									 data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" 
									 data-y="['top','top','top','top']" data-voffset="['140','110','80','100']" 
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
						 
									 data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
									 data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
									 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
									 data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
									data-start="1000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 

									
									style="z-index: 7; white-space: nowrap;"><?php echo $slider_raw[2]->heading; ?>
								</div>

								<!-- LAYER NR. 4 -->
								<div class="tp-caption Newspaper-Button rev-btn  rs-parallaxlevel-0" 
									 id="slide-131-layer-5" 
									 data-x="['left','left','left','left']" data-hoffset="['53','53','53','30']" 
									 data-y="['top','top','top','top']" data-voffset="['361','331','301','245']" 
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
										data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
										data-style_hover="c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
						 
									 data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
									 data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
									 data-mask_in="x:0px;y:0px;" 
									 data-mask_out="x:0;y:0;" 
									data-start="1000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 
									data-responsive="off"
									
									style="z-index: 8; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">READ MORE 
								</div>
							</li>
							<!-- SLIDE  -->
							<li data-index="rs-132" data-transition="parallaxvertical" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="<?php echo base_url(); ?>frontend/images/corporate/corporate4-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="<?php echo $slider_raw[3]->heading; ?>" data-description="<?php echo $slider_raw[3]->discription; ?>">
								<!-- MAIN IMAGE -->
								<img src="uploads/<?php echo $slider_raw[3]->image; ?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
								<!-- LAYERS -->

								<!-- LAYER NR. 1 -->
								<div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-132-layer-3" 
									 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
												data-width="full"
									data-height="full"
									data-whitespace="normal"
									data-transform_idle="o:1;"
						 
									 data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
									 data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
									data-start="1000" 
									data-basealign="slide" 
									data-responsive_offset="on" 

									
									style="z-index: 5;background-color:rgba(0, 0, 0, 0.5);border-color:rgba(0, 0, 0, 1.00);"> 
								</div>

								<!-- LAYER NR. 2 -->
								<div class="tp-caption Newspaper-Title   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-132-layer-1" 
									 data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" 
									 data-y="['top','top','top','top']" data-voffset="['165','135','105','130']" 
												data-fontsize="['50','50','50','30']"
									data-lineheight="['55','55','55','35']"
									data-width="['600','600','600','420']"
									data-height="none"
									data-whitespace="normal"
									data-transform_idle="o:1;"
						 
									 data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
									 data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
									 data-mask_in="x:0px;y:0px;" 
									 data-mask_out="x:0;y:0;" 
									data-start="1000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 

									
									style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;"><?php echo $slider_raw[2]->discription; ?>
								</div>

								<!-- LAYER NR. 3 -->
								<div class="tp-caption Newspaper-Subtitle   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-132-layer-2" 
									 data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" 
									 data-y="['top','top','top','top']" data-voffset="['140','110','80','100']" 
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
						 
									 data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
									 data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
									 data-mask_in="x:0px;y:0px;" 
									 data-mask_out="x:0;y:0;" 
									data-start="1000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 

									
									style="z-index: 7; white-space: nowrap;"><?php echo $slider_raw[3]->heading; ?> 
								</div>

								<!-- LAYER NR. 4 -->
								<div class="tp-caption Newspaper-Button rev-btn  rs-parallaxlevel-0" 
									 id="slide-132-layer-5" 
									 data-x="['left','left','left','left']" data-hoffset="['53','53','53','30']" 
									 data-y="['top','top','top','top']" data-voffset="['361','331','301','245']" 
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
										data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
										data-style_hover="c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
						 
									 data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
									 data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
									 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
									 data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
									data-start="1000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 
									data-responsive="off"
									
									style="z-index: 8; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">READ MORE 
								</div>
							</li>
						</ul>
						<div class="tp-bannertimer tp-bottom" style="height: 5px; background-color: rgba(166, 216, 236, 1.00);"></div>	
					</div>
				</div><!-- END REVOLUTION SLIDER -->
					</div>
                    <div class="col-md-3" style="padding:0;">
                    <form action="#" class="form bg-clouds">
                                        <h2 class="page-header" align="center" style="color:#fff;">SEND A MESSAGE</h2>

                                      <div class="row">
                                        <div class="form-group">
                                          <div class="col-md-12">
                                            <label>Your name *</label>
                                            <input type="text" id="name" name="name" class="form-control" maxlength="100" value="">
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="form-group">
                                          <div class="col-md-12">
                                            <label>Your Email *</label>
                                            <input type="text" id="name" name="name" class="form-control" maxlength="100" value="">
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                              <label>Comment *</label>
                                              <textarea style="height: 110px;" id="comment" name="comment" class="form-control" rows="10" maxlength="5000"></textarea>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="row top10 bottom20">
                                        <div class="col-md-12" style="margin:10px 0;">
                                          <input type="submit" data-loading-text="Loading..." class="btn btn-primary btn" value="Send Message">
                                        </div>
                                      </div>                    
                                  </form>
                    </div>
				<script type="text/javascript">
					var tpj=jQuery;					
					var revapi34;
					tpj(document).ready(function() {
						if(tpj("#rev_slider_34_1").revolution == undefined){
							revslider_showDoubleJqueryError("#rev_slider_34_1");
						}else{
							revapi34 = tpj("#rev_slider_34_1").show().revolution({
								sliderType:"standard",
								jsFileLocation:"<?php echo base_url(); ?>frontend/revolution/js/",
								sliderLayout:"fullwidth",
								dottedOverlay:"none",
								delay:9000,
								navigation: {
									keyboardNavigation:"on",
									keyboard_direction: "horizontal",
									mouseScrollNavigation:"off",
									onHoverStop:"on",
									touch:{
										touchenabled:"on",
										swipe_threshold: 75,
										swipe_min_touches: 1,
										swipe_direction: "horizontal",
										drag_block_vertical: false
									},
									bullets: {
										enable:false,
										hide_onmobile:true,
										hide_under:600,
										style:"metis",
										hide_onleave:true,
										hide_delay:200,
										hide_delay_mobile:1200,
										direction:"horizontal",
										h_align:"center",
										v_align:"bottom",
										h_offset:0,
										v_offset:20,
										space:5,
										tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
									}
									,
									arrows: {
										style:"gyges",
										enable:true,
										hide_onmobile:false,
										hide_over:778,
										hide_onleave:false,
										tmp:'',
										left: {
											h_align:"right",
											v_align:"bottom",
											h_offset:40,
											v_offset:0
										},
										right: {
											h_align:"right",
											v_align:"bottom",
											h_offset:0,
											v_offset:0
										}
									}
									,
									tabs: {
										style:"gyges",
										enable:true,
										width:250,
										height:100,
										min_width:250,
										wrapper_padding:0,
										wrapper_color:"transparent",
										wrapper_opacity:"0",
										tmp:'<div class="tp-tab-title">{{title}}</div><div class="tp-tab-desc">{{description}}</div>',
										visibleAmount: 3,
										hide_onmobile: true,
										hide_under:778,
										hide_onleave:false,
										hide_delay:200,
										direction:"vertical",
										span:false,
										position:"inner",
										space:10,
										h_align:"right",
										v_align:"center",
										h_offset:30,
										v_offset:0
									}
								},
								viewPort: {
									enable:true,
									outof:"pause",
									visible_area:"80%"
								},
								responsiveLevels:[1240,1024,778,480],
								gridwidth:[1240,1024,778,480],
								gridheight:[500,450,400,350],
								lazyType:"none",
								parallax: {
									type:"scroll",
									origo:"enterpoint",
									speed:400,
									levels:[5,10,15,20,25,30,35,40,45,50],
								},
								shadow:0,
								spinner:"off",
								stopLoop:"off",
								stopAfterLoops:-1,
								stopAtSlide:-1,
								shuffle:"off",
								autoHeight:"off",
								hideThumbsOnMobile:"off",
								hideSliderAtLimit:0,
								hideCaptionAtLimit:0,
								hideAllCaptionAtLilmit:0,
								debugMode:false,
								fallbacks: {
									simplifyAll:"off",
									nextSlideOnWindowFocus:"off",
									disableFocusListener:false,
								}
							});
						}
					});	/*ready*/
				</script>	
                
        <!--
        #################################
            - REVOLUTION SLIDER END -
        #################################
        -->
            	
  		</div>
        </div>
        </div>
 	<!-- showcase end -->
  
  <!-- What we do Start -->
                
  		<div class="row top-a top20 bottom50">
 			<div class="container">
                <div class="divide20"></div>
                <div class="style-title">Our <strong>Services</strong></div>
                <div class="separator">
                    <div class="separator-style"></div>
                </div>
                <div class="divide20"></div>
                <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12 padding-top20 wow fadeInUp">
                  <div class="col-xs-2"> <span class="fa fa-home fa-2x river"></span> </div>
                  <div class="col-xs-10">
                    <div>
                      <h4 class="black module-title"><?php echo $service_data[0]->heading; ?></h4>
                    </div>
                    <div>
                      <p><?php echo $service_data[0]->discription; ?><a href="#">Read More</a></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 padding-top20 wow fadeInUp" >
                  <div class="col-xs-2"> <span class="fa fa-building fa-2x river"></span> </div>
                  <div class="col-xs-10">
                    <div>
                      <h4 class="black module-title"><?php echo $service_data[1]->heading; ?></h4>
                    </div>
                    <div>
                      <p><?php echo $service_data[1]->discription; ?><a href="#">Read More</a></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 padding-top20 wow fadeInUp">
                  <div class="col-xs-2"> <span class="fa fa-cube fa-2x river"></span> </div>
                  <div class="col-xs-10">
                    <div>
                      <h4 class="black module-title"><?php echo $service_data[2]->heading; ?></h4>
                    </div>
                    <div>
                      <p><?php echo $service_data[2]->discription; ?><a href="#">Read More</a></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 padding-top20 wow fadeInUp">
                  <div class="col-xs-2"> <img src="<?php echo base_url(); ?>frontend/images/icons/carpet_icon.png" /></div>
                  <div class="col-xs-10">
                    <div>
                      <h4 class="black module-title"><?php echo $service_data[3]->heading; ?></h4>
                    </div>
                    <div>
                      <p><?php echo $service_data[3]->discription; ?><a href="#">Read More</a></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 padding-top20 wow fadeInUp">
                  <div class="col-xs-2"> <span class="fa fa-briefcase fa-2x river"></span> </div>
                  <div class="col-xs-10">
                    <div>
                      <h4 class="black module-title"><?php echo $service_data[4]->heading; ?></h4>
                    </div>
                    <div>
                      <p><?php echo $service_data[4]->discription; ?><a href="#">Read More</a></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 padding-top20 wow fadeInUp">
                  <div class="col-xs-2"> <img src="<?php echo base_url(); ?>frontend/images/icons/deep_icon.png" /> </div>
                  <div class="col-xs-10">
                    <div>
                      <h4 class="black module-title"><?php echo $service_data[5]->heading; ?></h4>
                    </div>
                    <div>
                      <p><?php echo $service_data[5]->discription; ?> <a href="#">Read More</a></p>
                    </div>
                  </div>
                </div>
              </div>
                <!-- DEMO I. -->
      		</div>
 		</div>
  

  
  	<!-- Start Content Block 2-7 -->
	<section id="content-2-7" class="content-2-7 parallax"  data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
  		<div class="row" style="background-color:#f1f1f1;padding:2% 0 4%;">
 			<div class="container">
            <div class="divide20"></div>
            <div class="style-title"><strong>Why Choose Us</strong></div>
            <div class="separator">
              <div class="separator-style"></div>
            </div>
            <div class="divide20"></div>
            	<div class='col-md-4'>
                    	<div class='col-md-12'>
                        	<div class="row">
                            	<div class="col-md-2 col-xs-2">
                        		<h3><img src="<?php echo base_url(); ?>frontend/images/icons/icon1.png"  style="margin-top:5%;" /></h3>
                        		</div>
                                <div class="col-md-10 col-xs-10">
                                <h3 class="title">Five Star Quality</h3>
                        		<p>Every time you book a service with us, we’ll send you qualified and experienced cleaning professionals. </p>
                        		</div>
                            </div>
                        </div>
                        
                        <div class='col-md-12'>
                        	<div class="row">
                            	<div class="col-md-2 col-xs-2">
                        		<h3><img src="<?php echo base_url(); ?>frontend/images/icons/icon2.png"  style="margin-top:5%;" /></h3>
                        		</div>
                                <div class="col-md-10 col-xs-10">
                                <h3 class="title">Reasonable Pricing</h3>
                        		<p>We offer excellent packages and affordable rates that meet our customers’ needs.</p>
                        		</div>
                            </div>
                        </div>
                        <div class='col-md-12'>
                        	<div class="row">
                            	<div class="col-md-2 col-xs-2">
                        		<h3><img src="<?php echo base_url(); ?>frontend/images/icons/icon1.png"  style="margin-top:5%;" /></h3>
                        		</div>
                                <div class="col-md-10 col-xs-10">
                                  <h3 class="title">Five Star Quality</h3>
                        		<p>Every time you book a service with us, we’ll send you qualified and experienced cleaning professionals.</p>
                        		</div>
                            </div>
                        </div>
            	</div>
                <div class='col-md-4'>
                    	<img src="<?php echo base_url(); ?>frontend/images/517.jpg" />
            	</div>
                <div class='col-md-4'>
                    	<div class='col-md-12'>
                        	<div class="row">
                            	<div class="col-md-2 col-xs-2">
                        		<h3><img src="<?php echo base_url(); ?>frontend/images/icons/icon3.png"  style="margin-top:5%;" /></h3>
                        		</div>
                                <div class="col-md-10 col-xs-10">
                                <h3 class="title">Customer Support</h3>
                        		<p>Got a question? Don't keep it to yourself. Start a chat or call us to get a quick and simple answer.</p>
                        		</div>
                            </div>
                        </div>
                        <div class='col-md-12'>
                        	<div class="row">
                            	<div class="col-md-2 col-xs-2">
                        		<h3><img src="<?php echo base_url(); ?>frontend/images/icons/icon4.png"  style="margin-top:5%;" /></h3>
                        		</div>
                                <div class="col-md-10 col-xs-10">
                                <h3 class="title">Fantastic Guarantee</h3>
                        		<p>We guarantee your satisfaction. If we get something wrong, we’ll come back and re-do it for free. </p>
                        		</div>
                            </div>
                        </div>
                        <div class='col-md-12'>
                        	<div class="row">
                            	<div class="col-md-2 col-xs-2">
                        		<h3><img src="<?php echo base_url(); ?>frontend/images/icons/icon3.png"  style="margin-top:5%;" /></h3>
                        		</div>
                                <div class="col-md-10 col-xs-10">
                                <h3 class="title">Customer Support</h3>
                        		<p>Got a question? Don't keep it to yourself. Start a chat or call us to get a quick and simple answer.</p>
                        		</div>
                            </div>
                        </div>
            	</div>
            </div>
        </div>
    </section>
    
    <div class="row" style="background-color:#333333; padding:20px 0;">
    	<div class="container">
        <div class="col-md-10">
        	<h2 style="margin-top:3%; color:#fff;">GET HIGH QUALITY CLEANING SERVICES AT AFFORDABLE PRICE</h2>
        </div>
        <div class="col-md-2">
        	<h2 style="margin-top:15%;"><a href="#" class="btn btn-primary" >GET A QUOTE</a></h2>
        </div>
        </div>
    </div>
    
     <div class="row">
     	<div class="col-md-3" style="background-color:#fff; padding:80px 0;" >
        	<div class="row">
            	<div class="col-md-5 col-xs-5" align="right">
        			<img src="<?php echo base_url(); ?>frontend/images/icons/counter-1.png" />
                </div>
                <div class="col-md-7 col-xs-7" align="left">
        			<h2 style="margin:0; font-weight:bold;font-size:40px;" class="counter">730</h2>
                    <p>BUILDINGS CLEANED</p>
                </div>
            </div>
        </div>
        <div class="col-md-3" style="background-color:#eeeeee ; padding:80px 0;">
        	<div class="row">
            	<div class="col-md-5 col-xs-5" align="right">
        			<img src="<?php echo base_url(); ?>frontend/images/icons/counter-2.png" />
                </div>
                <div class="col-md-7 col-xs-7" align="left">
        			<h2 style="margin:0; font-weight:bold;font-size:40px;" class="counter">380</h2>
                    <p>SATISFIED CLIENTS</p>
                </div>
            </div>
        </div>
        <div class="col-md-3" style="background-color:#fff; padding:80px 0;">
        	<div class="row">
            	<div class="col-md-5 col-xs-5" align="right">
        			<img src="<?php echo base_url(); ?>frontend/images/icons/counter-3.png" />
                </div>
                <div class="col-md-7 col-xs-7" align="left">
        			<h2 style="margin:0; font-weight:bold;font-size:40px;" class="counter">48</h2>
                    <p>PROFESSIONAL STAFF</p>
                </div>
            </div>
        </div>
        <div class="col-md-3" style="background-color:#eeeeee; padding:80px 0;">
        	<div class="row">
            	<div class="col-md-5 col-xs-5" align="right">
        			<img src="<?php echo base_url(); ?>frontend/images/icons/counter-4.png" />
                </div>
                <div class="col-md-7 col-xs-7" align="left">
        			<h2 style="margin:0; font-weight:bold; font-size:40px;" class="counter">35</h2>
                    <p>AWARDS WON</p>
                </div>
            </div>
        </div>
     </div>
    
	<!--// End Content Block 2-7 -->
    
    <!-- What we do Start -->
          <section data-speed="10" data-type="background" style="background-color: #202427;">
                    
          <div class="container padding-top100 padding-bottom70" style="background:url(images/world-map-dark.png); no-repeat cover;">
                  <div class='row'>
				   
                  	<div class="col-md-8">
                    	<div>
                        <h4 class="mod1">Areas We Cover</h4>
                        </div>
                        
                   		<div id="map" style="width: 100%; height: 300px;"></div>
                    </div>
                    <div class='col-md-4'>
                     <div class='text-center'>
                    <h4 class="mod1">What People Say About Us</h4>
                    </div>
                      <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                        <!-- Bottom Carousel Indicators -->
                        <ol class="carousel-indicators">
                          <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                          <li data-target="#quote-carousel" data-slide-to="1"></li>
                          <li data-target="#quote-carousel" data-slide-to="2"></li>
                        </ol>
                        
                        <!-- Carousel Slides / Quotes -->
                        <div class="carousel-inner">
                        
                          <!-- Quote 1 -->
                          <div class="item active">
                            <blockquote>
                              <div class="row">
                                <div class="col-sm-12 text-center">
                                  <img class="img-circle" src="<?php echo base_url(); ?>frontend/images/person_1.png" style="width: 80px;height: 80px;" alt="">
                                </div>
                                <div class="col-sm-12 text-center">
                                  <p class="mod1 concrete">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur!</p>
                                  <small>Someone famous</small>
                                </div>
                              </div>
                            </blockquote>
                          </div>
                          <!-- Quote 2 -->
                          <div class="item">
                            <blockquote>
                              <div class="row">
                                <div class="col-sm-12 text-center">
                                  <img class="img-circle" src="<?php echo base_url(); ?>frontend/images/person_2.png" style="width: 80px;height: 80px;" alt="">
                                </div>
                                <div class="col-sm-12 text-center">
                                  <p class="mod1 concrete">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor nec lacus ut tempor.</p>
                                  <small>Someone famous</small>
                                </div>
                              </div>
                            </blockquote>
                          </div>
                          <!-- Quote 3 -->
                          <div class="item">
                            <blockquote>
                              <div class="row">
                                <div class="col-sm-12 text-center">
                                  <img class="img-circle" src="<?php echo base_url(); ?>frontend/images/person_3.png" style="width: 80px;height: 80px;" alt="">
                                </div>
                                <div class="col-sm-12 text-center">
                                  <p class="mod1 concrete">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit, mauris.</p>
                                  <small>Someone famous</small>
                                </div>
                              </div>
                            </blockquote>
                          </div>
                        </div>
                        
                        <!-- Carousel Buttons Next/Prev -->
                        <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left silver"></i></a>
                        <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right silver"></i></a>
                      </div>                      
                    </div>
                  </div>
                  <div class="row">
                  		<div style="margin:3% 0 0 1.5%;">
                        <h4 class="mod1">Contact Details</h4>
                        </div>
                  <div class="col-md-4" align="left"> 
                 	 <p><i class="fa fa-map-marker"></i>  Unit 848 Plymouth Road Slough, Berkshire, SL14LP</span></p>
                  </div>
                  <div class="col-md-2" align="left">
                  	 <p><i class="fa fa-phone"></i><?php echo $contact_info[0]->primary_phone; ?></p>
                  </div>
                  <div class="col-md-2" align="left">
                  	 <p><i class="fa fa-envelope-o"></i><a href="mailto:#">  contact@example.com</a></p>
                  </div>
                  </div>
          </div>
                    
  		  </section>      
 
    <!-- inner-top start -->
    <div class="row inner-top bottom20">
   	  <div class="container">
      <!-- Logos Start -->
      <div id="logos" class="showbiz-container"> 
  
  	  <!--<div class="divide20"></div>-->
      
  <!-- THE NAVIGATION -->
  <div class="showbiz-navigation center sb-nav-grey"> <a id="showbiz_left_2" class="sb-navigation-left"><!--<i class="sb-icon-left-open"></i>--></a> <a id="showbiz_play_2" class="sb-navigation-play"><!--<i class="sb-icon-play sb-playbutton"></i><i class="sb-icon-pause sb-pausebutton"></i>--></a> <a id="showbiz_right_2" class="sb-navigation-right"><!--<i class="sb-icon-right-open"></i>--></a>
    <div class="sbclear"></div>
  </div>
  <!-- END OF THE NAVIGATION -->
  
  
  <!--  THE PORTFOLIO ENTRIES -->
  <div class="showbiz" data-left="#showbiz_left_2" data-right="#showbiz_right_2" data-play="#showbiz_play_2"> 
    
    <!-- THE OVERFLOW HOLDER CONTAINER, DONT REMOVE IT !! -->
    <div class="overflowholder"> 
      <!-- LIST OF THE ENTRIES -->
      <ul>
        
        <!-- AN ENTRY HERE , WITH PREDEFINED GREY SKIN-->
        <li class="sb-grey-skin"> 
          
          <!-- THE MEDIAHOLDER CONTAINER -->
          <div class="mediaholder"> 
            <!-- THE INNER WRAP FOR MEDIA HOLDER -->
            <div class="mediaholder_innerwrap"> <img alt="" src="<?php echo base_url(); ?>frontend/images/envato.png"> 
              
              <!-- THE HOVER CONTAINER AND THE HOVER ICONS -->
              <div class="hovercover" > <a href="#">
                <div class="linkicon notalone"><i class="sb-icon-link"></i></div>
                </a> <a class="fancybox" data-fancybox-group="group-logos" href="<?php echo base_url(); ?>frontend/images/envato.png">
                <div class="lupeicon notalone"><i class="sb-icon-search"></i></div>
                </a> </div>
              <!-- END OF HOVER CONTIANER --> 
              
            </div>
            <!-- END OF MEDIAHOLDER INNER WRAP--> 
          </div>
          <!-- END OF MEDIAHOLDER CONTAINER --> 
          
        </li>
        <!-- END OF ENTRY --> 
        
        <!-- AN ENTRY HERE -->
        <li class="sb-grey-skin">
          <div class="mediaholder ">
            <div class="mediaholder_innerwrap"> <img alt="" src="<?php echo base_url(); ?>frontend/images/dribbble.png">
              <div class="hovercover" data-maxopacity="0.85"> <a href="#">
                <div class="linkicon notalone"><i class="sb-icon-link"></i></div>
                </a> <a class="fancybox" data-fancybox-group="group-logos" href="<?php echo base_url(); ?>frontend/images/dribbble.png">
                <div class="lupeicon notalone"><i class="sb-icon-search"></i></div>
                </a> </div>
            </div>
          </div>
        </li>
        
        <!-- AN ENTRY HERE -->
        <li class="sb-grey-skin">
          <div class="mediaholder ">
            <div class="mediaholder_innerwrap"> <img alt="" src="<?php echo base_url(); ?>frontend/images/jquery.png">
              <div class="hovercover" data-maxopacity="0.85"> <a href="#">
                <div class="linkicon notalone"><i class="sb-icon-link"></i></div>
                </a> <a class="fancybox" data-fancybox-group="group-logos" href="<?php echo base_url(); ?>frontend/images/jquery.png">
                <div class="lupeicon notalone"><i class="sb-icon-search"></i></div>
                </a> </div>
            </div>
          </div>
        </li>
        
        <!-- AN ENTRY HERE -->
        <li class="sb-grey-skin">
          <div class="mediaholder ">
            <div class="mediaholder_innerwrap"> <img alt="" src="<?php echo base_url(); ?>frontend/images/wordpress.png">
              <div class="hovercover" data-maxopacity="0.85"> <a href="#">
                <div class="linkicon notalone"><i class="sb-icon-link"></i></div>
                </a> <a class="fancybox" data-fancybox-group="group-logos" href="<?php echo base_url(); ?>frontend/images/wordpress.png">
                <div class="lupeicon notalone"><i class="sb-icon-search"></i></div>
                </a> </div>
            </div>
          </div>
        </li>
        
        <!-- AN ENTRY HERE -->
        <li class="sb-grey-skin">
          <div class="mediaholder ">
            <div class="mediaholder_innerwrap"> <img alt="" src="<?php echo base_url(); ?>frontend/images/envato.png">
              <div class="hovercover" data-maxopacity="0.85"> <a href="#">
                <div class="linkicon notalone"><i class="sb-icon-link"></i></div>
                </a> <a class="fancybox" data-fancybox-group="group-logos" href="<?php echo base_url(); ?>frontend/images/envato.png">
                <div class="lupeicon notalone"><i class="sb-icon-search"></i></div>
                </a> </div>
            </div>
          </div>
        </li>
        
        <!-- AN ENTRY HERE -->
        <li class="sb-grey-skin">
          <div class="mediaholder ">
            <div class="mediaholder_innerwrap"> <img alt="" src="<?php echo base_url(); ?>frontend/images/dribbble.png">
              <div class="hovercover" data-maxopacity="0.85"> <a href="#">
                <div class="linkicon notalone"><i class="sb-icon-link"></i></div>
                </a> <a class="fancybox" data-fancybox-group="group-logos" href="<?php echo base_url(); ?>frontend/images/dribbble.png">
                <div class="lupeicon notalone"><i class="sb-icon-search"></i></div>
                </a> </div>
            </div>
          </div>
        </li>
        
        <!-- AN ENTRY HERE -->
        <li class="sb-grey-skin">
          <div class="mediaholder ">
            <div class="mediaholder_innerwrap"> <img alt="" src="<?php echo base_url(); ?>frontend/images/jquery.png">
              <div class="hovercover" data-maxopacity="0.85"> <a href="#">
                <div class="linkicon notalone"><i class="sb-icon-link"></i></div>
                </a> <a class="fancybox" data-fancybox-group="group-logos" href="<?php echo base_url(); ?>frontend/images/jquery.png">
                <div class="lupeicon notalone"><i class="sb-icon-search"></i></div>
                </a> </div>
            </div>
          </div>
        </li>
        
        <!-- AN ENTRY HERE -->
        <li class="sb-grey-skin">
          <div class="mediaholder ">
            <div class="mediaholder_innerwrap"> <img alt="" src="<?php echo base_url(); ?>frontend/images/wordpress.png">
              <div class="hovercover" data-maxopacity="0.85"> <a href="#">
                <div class="linkicon notalone"><i class="sb-icon-link"></i></div>
                </a> <a class="fancybox" data-fancybox-group="group-logos" href="<?php echo base_url(); ?>frontend/images/wordpress.png">
                <div class="lupeicon notalone"><i class="sb-icon-search"></i></div>
                </a> </div>
            </div>
          </div>
        </li>
      </ul>
      <div class="sbclear"></div>
    </div>
    <!-- END OF OVERFLOWHOLDER -->
    <div class="sbclear"></div>
  </div>
</div>
      <!-- Logos End -->
      </div>
    </div>
  	<?php include('footer.php'); ?>
    <span id="scroll-to-top">
      <a class="scroll-up">
        <span class="glyphicon glyphicon-chevron-up"></span>
      </a>
	</span>
 	

    <script type="text/javascript" src="<?php echo base_url(); ?>frontend/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>frontend/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>frontend/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <!-- Custom JS -->
    <script type="text/javascript" src="<?php echo base_url(); ?>frontend/js/custom.js"></script>
    
      <script src="<?php echo base_url(); ?>frontend/js/parallax-scrolling-script.js"></script>
    <script src="<?php echo base_url(); ?>frontend/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>frontend/js/wow.js"></script>
    <script src="<?php echo base_url(); ?>frontend/js/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url(); ?>frontend/js/waypoints.min.js"></script>
    
    <script type="text/javascript">
 $(document).ready( function() {
  
  // Counter
    $('.counter').counterUp({
      delay: 5,
      time: 500
  });
 });
</script>
<script type="text/javascript">
    var locations = [
      ['Berkshire Uk', 51.4670, 1.1854, 4],
      ['Buckinghamshire Uk', 51.8137, 0.8095, 5],
      ['Middlesex UK', 51.583015, -0.337820, 3],
      ['Surrey UK', 51.3148, 0.5600, 2],
      ['Oxfordshire Uk', 51.7612, 1.2465, 1]
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 7,
      center: new google.maps.LatLng(51.583015, -0.337820),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script>
    	
  </body>

<!-- Mirrored from demo.artofthemes.com/html/proflex/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Nov 2015 15:40:44 GMT -->
</html>