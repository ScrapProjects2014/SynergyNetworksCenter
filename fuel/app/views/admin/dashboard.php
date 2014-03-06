<!-- begin DASHBOARD CIRCLE TILES -->
<div class="row">
	<!-- CLIENTS TILE -->
	<div class="col-lg-2 col-sm-6">
		<div class="circle-tile">
			<a href="admin/clients">
				<div class="circle-tile-heading dark-blue">
					<i class="fa fa-users fa-fw fa-3x"></i>
				</div>
			</a>
			<div class="circle-tile-content dark-blue">
				<div class="circle-tile-description text-faded">
					Clients
				</div>
				<div class="circle-tile-number text-faded">
					<?php echo count(Model_Client::find('all')); ?>
					<span id="sparklineA"></span>
				</div>
				<a href="admin/clients" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
			</div>
		</div>
	</div>
	<!-- PROJECTS TILE -->
	<div class="col-lg-2 col-sm-6">
		<div class="circle-tile">
			<a href="admin/projects">
				<div class="circle-tile-heading green">
					<i class="fa fa-tasks fa-fw fa-3x"></i>
				</div>
			</a>
			<div class="circle-tile-content green">
				<div class="circle-tile-description text-faded">
					Projects
				</div>
				<div class="circle-tile-number text-faded">
					<?php echo count(Model_Project::find('all')); ?>
				</div>
				<a href="admin/projects" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
			</div>
		</div>
	</div>
	<!-- STAFF TILE -->
	<div class="col-lg-2 col-sm-6">
		<div class="circle-tile">
			<a href="admin/staff">
				<div class="circle-tile-heading blue">
					<i class="fa fa-users fa-fw fa-3x"></i>
				</div>
			</a>
			<div class="circle-tile-content blue">
				<div class="circle-tile-description text-faded">
					Staff
				</div>
				<div class="circle-tile-number text-faded">
					<?php echo count(Model_Staff::find('all')); ?>
					<span id="sparklineA"></span>
				</div>
				<a href="admin/staff" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
			</div>
		</div>
	</div>
	<!-- USERS TILE -->
	<div class="col-lg-2 col-sm-6">
		<div class="circle-tile">
			<a href="admin/users">
				<div class="circle-tile-heading orange">
					<i class="fa fa-users fa-fw fa-3x"></i>
				</div>
			</a>
			<div class="circle-tile-content orange">
				<div class="circle-tile-description text-faded">
					Users
				</div>
				<div class="circle-tile-number text-faded">
					<?php echo count(Model_User::find('all')); ?>
					<span id="sparklineA"></span>
				</div>
				<a href="admin/users" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
			</div>
		</div>
	</div>
</div>
<!-- end DASHBOARD CIRCLE TILES -->