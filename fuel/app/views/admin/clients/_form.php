<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Site', 'site', array('class'=>'control-label')); ?>

				<?php echo Form::input('site', Input::post('site', isset($client) ? $client->site : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Site')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Web address', 'web_address', array('class'=>'control-label')); ?>

				<?php echo Form::input('web_address', Input::post('web_address', isset($client) ? $client->web_address : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Web address')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>