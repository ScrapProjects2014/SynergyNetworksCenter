<h2>Viewing #<?php echo $project->id; ?></h2>

<p>
	<strong>Title:</strong>
	<?php echo $project->title; ?></p>
<p>
	<strong>Job type:</strong>
	<?php echo $project->job_type; ?></p>
<!-- <p>
	<strong>Client:</strong>
	<!--?php echo $project->client; ?></p -->
<p>
	<strong>Status:</strong>
	<?php echo $project->status; ?></p>
<p>
	<strong>Progress:</strong>
	<?php echo $project->progress; ?></p>
<p>
	<strong>Live:</strong>
	<?php echo $project->live; ?></p>
<p>
	<strong>Testing:</strong>
	<?php echo $project->testing; ?></p>
<p>
	<strong>Notes:</strong>
	<?php echo $project->notes; ?></p>
<p>
	<strong>Developer:</strong>
	<?php echo $project->developer; ?></p>

<?php echo Html::anchor('admin/projects/edit/'.$project->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/projects', 'Back'); ?>
