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
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							Contact Info 			
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index.html">Home</a> 
								<i class="icon-angle-right"></i>
							</li>
							<li><a href="#">Contact Info</a></li>
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
								<form class="form-horizontal" action="<?php echo base_url(); ?>post_contact_info_data" method="post" enctype="multipart/form-data">
								<div class="alert alert-error hide">
									<button class="close" data-dismiss="alert"></button>
									<?php if(isset($error)){ ?>
										<?php echo $error;?>
									<?php } ?>
								</div>
								    <div class="control-group">
			                          <label class="control-label">Email</label>
			                          <div class="controls">
			                             <input type="email" placeholder="Enter Valid Email" name="email" class="span6 m-wrap popovers" required/>
			                          </div>
			                        </div>
								    <div class="control-group">
			                          <label class="control-label">Address</label>
			                          <div class="controls">
			                             <input type="text" placeholder="Enter your Address" name="address" class="span6 m-wrap popovers" required/>
			                          </div>
			                        </div>
								    <div class="control-group">
			                          <label class="control-label">Main Phone</label>
			                          <div class="controls">
			                             <input type="text" name="primary_phone" placeholder="Primary Phone" class="span6 m-wrap popovers" required/>
			                          </div>
			                        </div>
								    <div class="control-group">
			                          <label class="control-label">phone-1</label>
			                          <div class="controls">
			                             <input type="text" placeholder="phone 1" name="secondary_phone1" class="span6 m-wrap popovers"  required/>
			                          </div>
			                        </div>			                        			                        		
								    <div class="control-group">
			                          <label class="control-label">phone-2</label>
			                          <div class="controls">
			                             <input type="text" placeholder="phone 2" name="secondary_phone2" class="span6 m-wrap popovers" required/>
			                          </div>
			                        </div>
								    <div class="control-group">
			                          <label class="control-label">phone-3</label>
			                          <div class="controls">
			                             <input type="text" placeholder="phone 3" name="secondary_phone3" class="span6 m-wrap popovers"  required/>
			                          </div>
			                        </div>
								    <div class="control-group">
			                          <label class="control-label">phone-4</label>
			                          <div class="controls">
			                             <input type="text" placeholder="phone 4" name="secondary_phone4" class="span6 m-wrap popovers"  required/>
			                          </div>
			                        </div>
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