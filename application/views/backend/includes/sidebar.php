
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
					<span class="title">UI Features</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub">
						<li ><a href="<?php echo base_url(); ?>slider_Images_show">Slider Images</a></li>
					</ul>
				</li>
				<li class="has-sub ">
					<a href="javascript:;">
					<i class="icon-table"></i> 
					<span class="title">Form Stuff</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub">
						<li ><a href="form_layout.html">Form Layouts</a></li>
						<li ><a href="form_samples.html">Advance Form Samples</a></li>
						<li ><a href="form_component.html">Form Components</a></li>
						<li ><a href="form_wizard.html">Form Wizard</a></li>
						<li ><a href="form_validation.html">Form Validation</a></li>
						<li ><a href="form_fileupload.html">Multiple File Upload</a></li>
						<li ><a href="form_dropzone.html">Dropzone File Upload</a></li>
					</ul>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
		<!-- END SIDEBAR -->