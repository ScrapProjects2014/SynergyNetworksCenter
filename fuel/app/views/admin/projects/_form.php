<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Title', 'title', array('class'=>'control-label')); ?>

				<?php echo Form::input('title', Input::post('title', isset($project) ? $project->title : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Title')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Job type', 'job_type', array('class'=>'control-label')); ?>

				<?php echo Form::input('job_type', Input::post('job_type', isset($project) ? $project->job_type : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Job type')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Status', 'status', array('class'=>'control-label')); ?>

				<?php echo Form::input('status', Input::post('status', isset($project) ? $project->status : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Status')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Progress', 'progress', array('class'=>'control-label')); ?>

				<?php echo Form::input('progress', Input::post('progress', isset($project) ? $project->progress : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Progress')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Live', 'live', array('class'=>'control-label')); ?>

				<?php echo Form::input('live', Input::post('live', isset($project) ? $project->live : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Live')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Testing', 'testing', array('class'=>'control-label')); ?>

				<?php echo Form::input('testing', Input::post('testing', isset($project) ? $project->testing : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Testing')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Notes', 'notes', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('notes', Input::post('notes', isset($project) ? $project->notes : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Notes')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Developer', 'developer', array('class'=>'control-label')); ?>

				<?php echo Form::input('developer', Input::post('developer', isset($project) ? $project->developer : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Developer')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Company', 'company_id', array('class'=>'control-label')); ?>

				<?php echo Form::select('company_id', Input::post('company_id', isset($project) ? $project->company_id : $clients->id), $clients, array('class' => 'col-md-4 form-control')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>