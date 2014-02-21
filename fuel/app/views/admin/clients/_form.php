<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Company Name', 'company', array('class'=>'control-label')); ?>

				<?php echo Form::input('company', Input::post('site', isset($client) ? $client->company : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Site')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Website', 'website', array('class'=>'control-label')); ?>

				<?php echo Form::input('website', Input::post('website', isset($client) ? $client->website : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Web address')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>