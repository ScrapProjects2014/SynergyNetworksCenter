<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('First', 'first', array('class'=>'control-label')); ?>

				<?php echo Form::input('first', Input::post('first', isset($staff) ? $staff->first : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'First')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Last', 'last', array('class'=>'control-label')); ?>

				<?php echo Form::input('last', Input::post('last', isset($staff) ? $staff->last : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Last')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Email', 'email', array('class'=>'control-label')); ?>

				<?php echo Form::input('email', Input::post('email', isset($staff) ? $staff->email : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Email')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Personal email', 'personal_email', array('class'=>'control-label')); ?>

				<?php echo Form::input('personal_email', Input::post('personal_email', isset($staff) ? $staff->personal_email : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Personal email')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Phone', 'phone', array('class'=>'control-label')); ?>

				<?php echo Form::input('phone', Input::post('phone', isset($staff) ? $staff->phone : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Phone')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Cell phone', 'cell_phone', array('class'=>'control-label')); ?>

				<?php echo Form::input('cell_phone', Input::post('cell_phone', isset($staff) ? $staff->cell_phone : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Cell phone')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Profile fields', 'profile_fields', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('profile_fields', Input::post('profile_fields', isset($staff) ? $staff->profile_fields : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Profile fields')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('User', 'user', array('class'=>'control-label')); ?>

				<?php echo Form::input('user', Input::post('user', isset($staff) ? $staff->user : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'User')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>