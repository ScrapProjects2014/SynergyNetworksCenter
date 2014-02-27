<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('First name', 'first_name', array('class'=>'control-label')); ?>

				<?php echo Form::input('first_name', Input::post('first_name', isset($contact) ? $contact->first_name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'First name')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Last name', 'last_name', array('class'=>'control-label')); ?>

				<?php echo Form::input('last_name', Input::post('last_name', isset($contact) ? $contact->last_name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Last name')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Phone', 'phone', array('class'=>'control-label')); ?>

				<?php echo Form::input('phone', Input::post('phone', isset($contact) ? $contact->phone : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Phone')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Email', 'email', array('class'=>'control-label')); ?>

				<?php echo Form::input('email', Input::post('email', isset($contact) ? $contact->email : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Email')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Client', 'client', array('class'=>'control-label')); ?>

				<?php echo Form::select('client', Input::post('client', isset($contact) ? $contact->client_id : $clients), array($clients), array('class' => 'col-md-4 form-control')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Modified date', 'modified_date', array('class'=>'control-label')); ?>

				<?php echo Form::input('modified_date', Input::post('modified_date', isset($contact) ? $contact->modified_date : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Modified date')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Modified by', 'modified_by', array('class'=>'control-label')); ?>

				<?php echo Form::input('modified_by', Input::post('modified_by', isset($contact) ? $contact->modified_by : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Modified by')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>