
<div class="row">
  <div class="col-lg-12">
		
		<div class="portlet portlet-default">
			<div class="portlet-body">
					<ul id="userTab" class="nav nav-tabs">
							<li class="active"><?php echo Html::anchor('admin/users/view/'.$user->id, 'Overview', array('id' => '#profile-settings', 'data-toggle' => 'tab')); ?>
							</li>
							<li><?php echo Html::anchor('admin/users/edit/'.$user->id, 'Update Profile', array('id' => '#profile-settings', 'data-toggle' => 'tab')); ?>
							</li>
					</ul>
					
					<div id="userTabContent" class="tab-content">
							<div class="tab-pane fade in active" id="overview">
							
							 <div class="row">
									<div class="col-lg-2 col-md-3">
											<?php echo Asset::img('snworks-logo.svg', array('class="img-responsive img-profile"')); ?>
											<div class="list-group">
													<a href="#" class="list-group-item active">Overview</a>
													<a href="#" class="list-group-item">Messages<span class="badge green">4</span></a>
													<a href="#" class="list-group-item">Alerts<span class="badge orange">9</span></a>
													<a href="#" class="list-group-item">Tasks<span class="badge blue">10</span></a>
											</div>
									</div>
									<div class="col-lg-7 col-md-5">
										<h1><?php echo $user->username; ?></h1>
										<p>Notes Section will be here.</p>
										<ul class="list-inline">
												<li><i class="fa fa-map-marker fa-muted"></i> Bayville, FL</li>
												<li><i class="fa fa-user fa-muted"></i><?php echo $user->group; ?></li>
												<li><i class="fa fa-group fa-muted"></i> Sales, Marketing, Management</li>
												<li><i class="fa fa-trophy fa-muted"></i> Top Seller</li>
												<li><i class="fa fa-calendar fa-muted"></i> Member Since: 5/13/11</li>
										</ul>
										<h3>Recent Projects</h3>
											<div class="table-responsive">
													<table class="table table-hover table-bordered table-striped">
															<thead>
																	<tr>
																			<th>Status</th>
																			<th>Client</th>
																			<th>Job</th>
																			<th>Link</th>
																	</tr>
															</thead>
															<tbody>
																	<tr>
																			<td>25%</td>
																			<td>Admin Creation</td>
																			<td>Development</td>
																			<td><a class="btn btn-xs btn-orange disabled"><i class="fa fa-clock-o"></i> Pending</a>
																			</td>
																	</tr>
																	<tr>
																			<td>1/31/14</td>
																			<td>6:02 PM</td>
																			<td>$5.32</td>
																			<td><a class="btn btn-xs btn-orange disabled"><i class="fa fa-clock-o"></i> Pending</a>
																			</td>
																	</tr>											
															</tbody>
													</table>
											</div>
									</div>
									<div class="col-lg-3 col-md-4">
										<h3>Contact Details</h3>
										<p><i class="fa fa-phone fa-muted fa-fw"></i> 1+(234) 555-2039</p>
										<p><i class="fa fa-building-o fa-muted fa-fw"></i> 8516 Market St.
												<br>Bayville, FL 55555</p>
										<p><i class="fa fa-envelope-o fa-muted fa-fw"></i>  <?php echo $user->email; ?>
										</p>
										<ul class="list-inline">
												<li><a class="facebook-link" href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
												</li>
												<li><a class="twitter-link" href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
												</li>
												<li><a class="linkedin-link" href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
												</li>
												<li><a class="google-plus-link" href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
												</li>
										</ul>
								</div>
						</div>					
						</div>
						
<!-- Profile Settings.... might need to move to Edit page ---->		
						<div class="tab-pane fade" id="profile-settings">

							<div class="row">
								<div class="col-sm-3">
										<ul id="userSettings" class="nav nav-pills nav-stacked">
												<li class="active"><a href="#basicInformation" data-toggle="tab"><i class="fa fa-user fa-fw"></i> Basic Information</a>
												</li>
												<li><a href="#profilePicture" data-toggle="tab"><i class="fa fa-picture-o fa-fw"></i> Profile Picture</a>
												</li>
												<li><a href="#changePassword" data-toggle="tab"><i class="fa fa-lock fa-fw"></i> Change Password</a>
												</li>
										</ul>
								</div>
								<div class="col-sm-9">
										<div id="userSettingsContent" class="tab-content">
												<div class="tab-pane fade in active" id="basicInformation">
														<?php echo Form::open(); ?>
																<h4 class="page-header">Personal Information:</h4>
																<div class="form-group">
																		<label>First Name</label>
																		<input type="text" class="form-control" value="John">
																</div>
																<div class="form-group">
																		<label>Last Name</label>
																		<input type="text" class="form-control" value="Smith">
																</div>
																<div class="form-group">
																		<label>Phone Number</label>
																		<input type="tel" class="form-control" value="1+(234) 555-2039">
																</div>
																<div class="form-group">
																		<label>Address</label>
																		<input type="text" class="form-control" value="8516 Market St.">
																</div>
																<div class="form-inline">
																		<div class="form-group">
																				<label>City</label>
																				<input type="text" class="form-control" value="Bayville">
																		</div>
																		<div class="form-group">
																				<label>State</label>
																				<input type="text" class="form-control" value="FL">
																		</div>
																		<div class="form-group">
																				<label>ZIP</label>
																				<input type="text" class="form-control" value="55555">
																		</div>
																</div>
																<h4 class="page-header">Contact Details:</h4>
																<div class="form-group">
																		<?php echo Form::label('Email', 'email', array('class'=>'control-label')); ?>

																		<?php echo Form::input('email', Input::post('email', isset($user) ? $user->email : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Email')); ?>
																</div>
																<div class="form-group">
																		<label><i class="fa fa-globe fa-fw"></i> Website</label>
																		<input type="url" class="form-control" value="http://www.website.com">
																</div>
																<h4 class="page-header">Profile Information:</h4>
																<div class="form-group">
																		<label><i class="fa fa-info fa-fw"></i> About</label>
																		<textarea class="form-control" rows="3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam placerat nunc ut tellus tristique, non posuere neque iaculis.</textarea>
																</div>
																<div class="form-group">
																		<label><i class="fa fa-building-o fa-fw"></i> Departments</label>
																		<select multiple class="form-control">
																				<option>Accounting</option>
																				<option>Customer Support</option>
																				<option>Human Resources</option>
																				<option selected>Management</option>
																				<option selected>Marketing</option>
																				<option>Production</option>
																				<option>Quality Assurance</option>
																				<option selected>Sales</option>
																		</select>

																</div>
																<h4 class="page-header">Social Profiles:</h4>
																<div class="form-group">
																		<label><i class="fa fa-facebook fa-fw"></i> Facebook Profile URL</label>
																		<input type="url" class="form-control" value="http://www.facebook.com/john.smith9324">
																</div>
																<div class="form-group">
																		<label><i class="fa fa-linkedin fa-fw"></i> LinkedIn Profile URL</label>
																		<input type="url" class="form-control" value="http://www.linkedin.com/u/john.smith923">
																</div>
																<div class="form-group">
																		<label><i class="fa fa-google-plus fa-fw"></i> Google+ Profile URL</label>
																		<input type="url" class="form-control" value="http://plus.google.com/john-smith9993">
																</div>
																<div class="form-group">
																		<label><i class="fa fa-twitter fa-fw"></i> Twitter Username</label>
																		<input type="text" class="form-control" value="@JohnSmith">
																</div>
																<div class="form-group">
																	<label class='control-label'>&nbsp;</label>
																	<?php echo Form::submit('submit', 'Update Profile', array('class' => 'btn btn-primary')); ?>		
																</div>
																<button class="btn btn-green">Cancel</button>
														<?php echo Form::close(); ?>
												</div>
												<div class="tab-pane fade" id="profilePicture">
														<h3>Current Picture:</h3>
														<img class="img-responsive img-profile" src="img/profile-full.jpg" alt="">
														<br>
														<form role="form">
																<div class="form-group">
																		<label>Choose a New Image</label>
																		<input type="file">
																		<p class="help-block"><i class="fa fa-warning"></i> Image must be no larger than 500x500 pixels. Supported formats: JPG, GIF, PNG</p>
																		<button type="submit" class="btn btn-default">Update Profile Picture</button>
																		<button class="btn btn-green">Cancel</button>
																</div>
														</form>
												</div>
												<div class="tab-pane fade in" id="changePassword">
														<h3>Change Password:</h3>
														<?php echo Form::open(array("class"=>"form-horizontal")); ?>
																<div class="form-group">
																	<?php echo Form::label('Password', 'password', array('class'=>'control-label')); ?>

																		<?php echo Form::input('password', Input::post('password', isset($user) ? $user->password : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Password')); ?>

																</div>
																<div class="form-group">
																	<label class='control-label'>&nbsp;</label>
																	<?php echo Form::submit('submit', 'Update Password', array('class' => 'btn btn-primary')); ?>		
																<?php echo Html::anchor('admin/users', 'Cancel'); ?>
																</div>
														<?php echo Form::close(); ?>
												</div>
										</div>
								</div>
							</div>

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
		
  </div>
 </div>