<div class="row">
	<div class="col-sm-3">
			<ul id="userSettings" class="nav nav-pills nav-stacked">
					<li class="active"><a href="#userInformation" data-toggle="tab"><i class="fa fa-user fa-fw"></i> User Information</a>
					</li>
					<li><a href="#basicInformation" data-toggle="tab"><i class="fa fa-user fa-fw"></i> Basic Information</a>
					</li>
					<li><a href="#profilePicture" data-toggle="tab"><i class="fa fa-picture-o fa-fw"></i> Profile Picture</a>
					</li>
					<li><a href="#changePassword" data-toggle="tab"><i class="fa fa-lock fa-fw"></i> Change Password</a>
					</li>
			</ul>
	</div>
	<div class="col-sm-9">
			<div id="userSettingsContent" class="tab-content">
					<div class="tab-pane fade in active" id="userInformation">
							<?php echo Form::open(); ?>
									<h4 class="page-header">Personal Information:</h4>
									<div class="form-group">
											<?php echo Form::label('Username', 'username', array('class'=>'control-label')); ?>

											<?php echo Form::input('username', Input::post('username', isset($user) ? $user->username : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Username')); ?>
									</div>
									<div class="form-group">
										<?php echo Form::label('Password', 'password', array('class'=>'control-label')); ?>

											<?php echo Form::input('password', Input::post('password', isset($user) ? $user->password : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Password')); ?>
									</div>
									<div class="form-group">
											<?php echo Form::label('Group', 'group', array('class'=>'control-label')); ?>

											<?php echo Form::input('group', Input::post('group', isset($user) ? $user->group : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Group')); ?>
									</div>
									<h4 class="page-header">Contact Details:</h4>
									<div class="form-group">
											<?php echo Form::label('Email', 'email', array('class'=>'control-label')); ?>

											<?php echo Form::input('email', Input::post('email', isset($user) ? $user->email : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Email')); ?>
									</div>
									<div class="form-group">
										<label class='control-label'>&nbsp;</label>
										<?php echo Form::submit('submit', 'Update Profile', array('class' => 'btn btn-primary')); ?>		
									</div>
									<button class="btn btn-green">Cancel</button>
							<?php echo Form::close(); ?>
					</div>					
			</div>
	</div>
</div>