<?php include('includes/header.php'); ?>
<?php include('includes/sidebar.php'); ?>
		<!-- BEGIN PAGE -->
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div id="portlet-config" class="modal hide">
				<div class="modal-header">
					<button data-dismiss="modal" class="close" type="button"></button>
					<h3>Widget Settings</h3>
				</div>
				<div class="modal-body">
					<p>Here will be a configuration form</p>
				</div>
			</div>
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN STYLE CUSTOMIZER -->
						<div class="color-panel hidden-phone">
							<div class="color-mode-icons icon-color"></div>
							<div class="color-mode-icons icon-color-close"></div>
							<div class="color-mode">
								<p>THEME COLOR</p>
								<ul class="inline">
									<li class="color-black current color-default" data-style="default"></li>
									<li class="color-blue" data-style="blue"></li>
									<li class="color-brown" data-style="brown"></li>
									<li class="color-purple" data-style="purple"></li>
									<li class="color-white color-light" data-style="light"></li>
								</ul>
								<label class="hidden-phone">
								<input type="checkbox" class="header" checked value="" />
								<span class="color-mode-label">Fixed Header</span>
								</label>							
							</div>
						</div>
						<!-- END BEGIN STYLE CUSTOMIZER -->   	
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							Contact Info 			
							<small>statistics and more</small>
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index.html">Home</a> 
								<i class="icon-angle-right"></i>
							</li>
							<li><a href="#">Contact Info Form</a></li>
							<li class="pull-right no-text-shadow">
								<div id="dashboard-report-range" class="dashboard-date-range tooltips no-tooltip-on-touch-device responsive" data-tablet="" data-desktop="tooltips" data-placement="top" data-original-title="Change dashboard date range">
									<i class="icon-calendar"></i>
									<span></span>
									<i class="icon-angle-down"></i>
								</div>
							</li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<div id="dashboard">
					<div class="row-fluid">
						<div class="span6" style="height:0px;">
							<!-- BEGIN PORTLET-->
							<div class="portlet solid bordered light-grey">
								<div class="portlet-body">
									<div id="site_statistics_content" class="hide">
										<div id="site_statistics" class="chart"></div>
									</div>
								</div>
							</div>
							<!-- END PORTLET-->
						</div>
						<div class="span6" style="height:0px;"">
							<!-- BEGIN PORTLET-->
							<div class="portlet solid light-grey bordered hide">
								<div class="portlet-body">
									<div id="site_activities_content" class="hide">
										<div id="site_activities" style="height:100px;"></div>
									</div>
								</div>
							</div>
							<!-- END PORTLET-->
							<!-- BEGIN PORTLET-->
							<div class="portlet solid bordered light-grey hide">
								<div class="portlet-title">
								</div>
								<div class="portlet-body">
									<div id="load_statistics_content" class="hide">
										<div id="load_statistics" style="height:108px;"></div>
									</div>
								</div>
							</div>
							<!-- END PORTLET-->
						</div>
						<div class="portlet box blue">
		                     <div class="portlet-title">
		                        <h4><i class="icon-reorder"></i>Contact Info</h4>
		                        <div class="tools">
		                           <a href="javascript:;" class="collapse"></a>
		                           <a href="#portlet-config" data-toggle="modal" class="config"></a>
		                           <a href="javascript:;" class="reload"></a>
		                           <a href="javascript:;" class="remove"></a>
		                        </div>
		                     </div>
							<div class="portlet-body form">	
								<form class="form-horizontal" action="<?php echo base_url(); ?>post_update_contact_info" method="post" enctype="multipart/form-data">
								<div class="alert alert-error hide">
									<button class="close" data-dismiss="alert"></button>
									<?php if(isset($error)){ ?>
										<?php echo $error;?>
									<?php } ?>
								</div>
								    <div class="control-group">
			                          <label class="control-label">Email</label>
			                          <div class="controls">
			                             <input type="email" value="<?php echo $get_signle_contact[0]->email; ?>" placeholder="Enter Valid Email" name="email" class="span6 m-wrap popovers" data-trigger="hover" data-content="Popover body goes here. Popover body goes here." data-original-title="Popover header" required/>
			                          </div>
			                        </div>
								    <div class="control-group">
			                          <label class="control-label">Address</label>
			                          <div class="controls">
			                             <input type="text" value="<?php echo $get_signle_contact[0]->address; ?>" placeholder="Enter your Address" name="address" class="span6 m-wrap popovers" data-trigger="hover" data-content="Popover body goes here. Popover body goes here." data-original-title="Popover header" required/>
			                          </div>
			                        </div>
								    <div class="control-group">
			                          <label class="control-label">Primary Phone</label>
			                          <div class="controls">
			                             <input type="text" value="<?php echo $get_signle_contact[0]->primary_phone; ?>" name="primary_phone" placeholder="Primary Phone" class="span6 m-wrap popovers" data-trigger="hover" data-content="Popover body goes here. Popover body goes here." data-original-title="Popover header" required/>
			                          </div>
			                        </div>
								    <div class="control-group">
			                          <label class="control-label">Secondary phone 1</label>
			                          <div class="controls">
			                             <input type="text" value="<?php echo $get_signle_contact[0]->secondary_phone1; ?>" placeholder="Secondary phone 1" name="secondary_phone1" class="span6 m-wrap popovers" data-trigger="hover" data-content="Popover body goes here. Popover body goes here." data-original-title="Popover header" required/>
			                          </div>
			                        </div>			                        			                        		
								    <div class="control-group">
			                          <label class="control-label">Secondary phone 2</label>
			                          <div class="controls">
			                             <input type="text" value="<?php echo $get_signle_contact[0]->secondary_phone2; ?>" placeholder="Secondary phone 2" name="secondary_phone2" class="span6 m-wrap popovers" data-trigger="hover" data-content="Popover body goes here. Popover body goes here." data-original-title="Popover header" required/>
			                          </div>
			                        </div>
								    <div class="control-group">
			                          <label class="control-label">Secondary phone 3</label>
			                          <div class="controls">
			                             <input type="text" value="<?php echo $get_signle_contact[0]->secondary_phone3; ?>" placeholder="Secondary phone 3" name="secondary_phone3" class="span6 m-wrap popovers" data-trigger="hover" data-content="Popover body goes here. Popover body goes here." data-original-title="Popover header" required/>
			                          </div>
			                        </div>
								    <div class="control-group">
			                          <label class="control-label">Secondary phone 4</label>
			                          <div class="controls">
			                             <input type="text" value="<?php echo $get_signle_contact[0]->secondary_phone4; ?>" placeholder="Secondary phone 4" name="secondary_phone4" class="span6 m-wrap popovers" data-trigger="hover" data-content="Popover body goes here. Popover body goes here." data-original-title="Popover header" required/>
			                          </div>
			                        </div>
			                         <input type="hidden" name="id" value="<?php echo $get_signle_contact[0]->id; ?>"> <!-- hidden field -->
			                      	<div class="form-actions">
		                            <input type="submit" class="btn blue" method="past" onclick="form_submit()" value="Submit">			
		                              <!--+++++++++++++++++++++++++++++++++++++-->
		                              <!--override java scriipt for form submit-->
		                              <!--+++++++++++++++++++++++++++++++++++++-->
		                              <script type="text/javascript">
		                                 function form_submit() {
		                                    document.getElementById("form_sample_1").submit();
		                                 }
		                              </script>   
		                           </div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END PAGE CONTAINER-->		
		</div>
		<!-- END PAGE -->
	</div>
	<!-- END CONTAINER -->
	<?php include('includes/footer.php') ?>