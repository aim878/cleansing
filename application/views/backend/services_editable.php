
<?php include('table_partials/header.php'); ?>
<?php include('includes/sidebar.php'); ?>
		<!-- BEGIN PAGE -->
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div id="portlet-config" class="modal hide">
				<div class="modal-header">
					<button data-dismiss="modal" class="close" type="button"></button>
					<h3>portlet Settings</h3>
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
							Editable Table				
							<small>editable table Slider Images</small>
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index.html">Home</a> 
								<i class="icon-angle-right"></i>
							</li>
							<li>
								<a href="#">Data Tables</a>
								<i class="icon-angle-right"></i>
							</li>
							<li><a href="#">Editable Tables</a></li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN EXAMPLE TABLE PORTLET-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<h4><i class="icon-edit"></i>Editable Table</h4>
							</div>
							<div class="portlet-body">

								<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
									<thead>
										<tr>
											<th width="30%">Heading</th>
											<th width="50%">Description</th>
											<th width="20%">Action</th>
											
										</tr>
									</thead>
									<tbody>
									<?php foreach($services_data as $data) { ?>
										<tr class="">
											<td><?php echo $data->heading ?></td>
											<td><?php echo $data->discription ?></td>
											<td><a class="edit" href="<?php echo base_url();?>get_update_services/<?php echo $data->id ?>">Edit</a>&nbsp;<a class="delete" href="<?php echo base_url();?>delete_services/<?php echo $data->id ?>">Delete</a></td>
										</tr>
									<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
						<!-- END EXAMPLE TABLE PORTLET-->
					</div>
				</div>
				<!-- END PAGE CONTENT -->
			</div>
			<!-- END PAGE CONTAINER-->
		</div>
		<!-- END PAGE -->
	</div>
	<!-- END CONTAINER -->

<?php include('includes/footer.php') ?>
