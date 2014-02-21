
<div class="row">
  <div class="col-lg-12">
		
		<div class="portlet portlet-default">
			<div class="portlet-body">
					<ul id="userTab" class="nav nav-tabs">
							<li class="active"><a href="#overview" data-toggle="tab">Overview</a>
							</li>
							<li><a href="#profile-settings" data-toggle="tab">Update Profile</a>
							</li>
					</ul>
					
					<div id="userTabContent" class="tab-content">
							<div class="tab-pane fade in active" id="overview">
							
							<?php echo render('admin/users/view/'); ?>
				
						</div>
						
<!-- Profile Settings.... might need to move to Edit page ---->		
						<div class="tab-pane fade" id="profile-settings">

							<?php echo render('admin/users/edit/'); ?>

						</div>		
				</div>
		</div>
		<!-- /.portlet-body -->
</div>
<!-- /.portlet -->


</div>
<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
