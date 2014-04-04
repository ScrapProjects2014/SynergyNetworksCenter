<div class="row">
	<div class="col-lg-12">

		<div class="portlet portlet-default">
			<div class="portlet-body">
				<ul id="userTab" class="nav nav-tabs">
					<li class="active"><?php echo Html::anchor('admin/users/view/'.$user->id, 'Overview'); ?>
					</li>
					<li><?php echo Html::anchor('admin/users/edit/'.$user->id, 'Update Profile'); ?>
					</li>
				</ul>


				<div id="userTabContent" class="tab-content">

					<div class="tab-pane fade in active" id="overview">
						<?php echo render('admin\users/view'); ?>
					</div>
					<!-- / #overview -->

					<div class="tab-pane fade" id="profile-settings">
						<?php echo render('admin\users/_form'); ?>
					</div>
					<!-- / #profile-settings -->

				</div>
				<!-- / #userTabContent -->

			</div>
			<!-- /.portlet-body -->
		</div>
		<!-- /.portlet -->


	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->