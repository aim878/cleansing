
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
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							Services		
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index.html">Home</a> 
								<i class="icon-angle-right"></i>
							</li>
							<li>
								<a href="#">Services</a>
							</li>
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
								<a href="<?php echo base_url(); ?>get_services_view"><input type="button" class="btn blue" value="Add"></a>
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
