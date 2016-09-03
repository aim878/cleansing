
<?php include('table_partials/header.php'); ?>
<?php include('includes/sidebar.php'); ?>
		<!-- BEGIN PAGE -->
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE CONTAINER-->			
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<div class="row-fluid">
					<div class="span12"> 
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							Main Sliders				
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index.html">Home</a> 
								<i class="icon-angle-right"></i>
							</li>
							<li>
								<a href="#">Slider</a>
								<i class="icon-angle-right"></i>
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
								<h4><i class="icon-edit"></i>Sliders Data</h4>
							</div>
							<div class="portlet-body">

								<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
									<thead>
										<tr>
											<th width="15%">Heading</th>
											<th width="30%">Description</th>
											<th width="40%">Image</th>
											<th width="15%">Action</th>
											
										</tr>
									</thead>
									<tbody>
									<?php foreach($slider_data as $data) { ?>
										<tr class="">
											<td><?php echo $data->heading ?></td>
											<td><?php echo $data->discription ?></td>
											<td><img src="uploads/<?php echo $data->image ?>"/ height="150px" width="200px;"></td>
											<td><a class="edit" href="<?php echo base_url();?>get_update_image/<?php echo $data->id ?>">Edit</a>&nbsp;<a class="delete" href="<?php echo base_url();?>delete_image/<?php echo $data->id ?>">Delete</a></td>
										</tr>
									<?php } ?>
									</tbody>
								</table>
								<a href="<?php echo base_url(); ?>usr_profile"><input type="button" class="btn blue" value="Add"></a>
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
