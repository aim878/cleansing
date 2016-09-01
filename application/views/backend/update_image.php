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
							Dashboard				
							<small>statistics and more</small>
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index.html">Home</a> 
								<i class="icon-angle-right"></i>
							</li>
							<li><a href="#">Dashboard</a></li>
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
						<div class="span6 hide">
							<!-- BEGIN PORTLET-->
							<div class="portlet solid bordered light-grey ">
								<div class="portlet-body">
									<div id="site_statistics_content" class="hide">
										<div id="site_statistics" class="chart"></div>
									</div>
								</div>
							</div>
							<!-- END PORTLET-->
						</div>
						<div class="span6 hide">
							<!-- BEGIN PORTLET-->
							<div class="portlet solid light-grey bordered">
								<div class="portlet-body">
									<div id="site_activities_content" class="hide">
										<div id="site_activities" style="height:100px;"></div>
									</div>
								</div>
							</div>
							<!-- END PORTLET-->
							<!-- BEGIN PORTLET-->
							<div class="portlet solid bordered light-grey">
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
		                        <h4><i class="icon-reorder"></i>Update form</h4>
		                        <div class="tools">
		                           <a href="javascript:;" class="collapse"></a>
		                           <a href="#portlet-config" data-toggle="modal" class="config"></a>
		                           <a href="javascript:;" class="reload"></a>
		                           <a href="javascript:;" class="remove"></a>
		                        </div>
		                     </div>
							<div class="portlet-body form">	
								<form class="form-horizontal" action="<?php echo base_url(); ?>post_update_image/" method="post" enctype="multipart/form-data">
								<div class="alert alert-error">
									<button class="close" data-dismiss="alert"></button>
									<?php if(isset($error)){ ?>
										<?php echo $error;?>
									<?php } ?>
								</div>
								    <div class="control-group">
			                          <label class="control-label">Heading</label>
			                          <div class="controls">
			                             <input type="text" name="heading" value="<?php echo $single_image_data[0]->heading; ?>" class="span6 m-wrap popovers" data-trigger="hover" data-content="Popover body goes here. Popover body goes here." data-original-title="Popover header" required/>
			                          </div>
			                        </div>
			                        <div class="fileupload fileupload-new" data-provides="fileupload">
									<div class="control-group">
		                              <label class="control-label">Image Upload</label>
		                              <div class="controls">
		                                 <div class="fileupload fileupload-new" data-provides="fileupload">
		                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
		                                       <img src="<?php echo base_url(); ?>uploads/<?php echo $single_image_data[0]->image; ?>" alt="NO Image Found" />
		                                    </div>
		                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
		                                    <br>
		                              </div>
			                        </div>		
			                        <input type="hidden" name="id" value="<?php echo $single_image_data[0]->id; ?>"> <!-- hidden field for id -->	                        
		                            <div class="control-group">
		                              <label class="control-label">Default</label>
		                              <div class="controls">
		                                 <input type="file" name="userfile" class="default" />
		                              </div>
		                            </div>
			                        <div class="control-group">
                              			<label class="control-label">CKEditor</label>
                              			<div class="controls">
                                 			<textarea class="span12 ckeditor m-wrap" name="editor1" rows="6"><?php echo $single_image_data[0]->discription; ?></textarea>
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