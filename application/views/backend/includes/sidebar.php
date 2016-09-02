
	<!-- BEGIN CONTAINER -->
	<div class="page-container row-fluid">
		<!-- BEGIN SIDEBAR -->
		<div class="page-sidebar nav-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->        	
			<ul>
				<li>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone"></div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				<li>
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<form class="sidebar-search">
						<div class="input-box">
							<a href="javascript:;" class="remove"></a>
							<input type="text" placeholder="Search..." />				
							<input type="button" class="submit" value=" " />
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<li class="start active ">
					<a href="<?php echo base_url(); ?>rl_view">
					<i class="icon-home"></i> 
					<span class="title">Dashboard</span>
					<span class="selected"></span>
					</a>
				</li>
				<li class="has-sub ">
					<a href="javascript:;">
					<i class="icon-bookmark-empty"></i> 
					<span class="title">Cleansing Features</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub">
						<li ><a href="<?php echo base_url(); ?>slider_Images_show">Slider data</a></li>
						<li ><a href="<?php echo base_url(); ?>services_data_show">Services</a></li>
						<li ><a href="<?php echo base_url(); ?>contact_info_data_show">Contact</a></li>

					</ul>
				</li>
				<li class="has-sub ">
					<a href="javascript:;">
					<i class="icon-table"></i> 
					<span class="title">Form Stuff</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub">
						<li ><a href="<?php echo base_url(); ?>usr_profile">slider form</a></li>
						<li ><a href="<?php echo base_url(); ?>get_services_view"">services form</a></li>
						<li ><a href="<?php echo base_url(); ?>get_services_view"">contact_info form</a></li>
					</ul>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
		<!-- END SIDEBAR -->