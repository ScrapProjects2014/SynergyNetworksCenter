<h2>Viewing <?php echo $staff->user; ?></h2>

<p>
	<strong>First:</strong>
	<?php echo $staff->first; ?></p>
<p>
	<strong>Last:</strong>
	<?php echo $staff->last; ?></p>
<p>
	<strong>Email:</strong>
	<?php echo $staff->email; ?></p>
<p>
	<strong>Personal email:</strong>
	<?php echo $staff->personal_email; ?></p>
<p>
	<strong>Phone:</strong>
	<?php echo $staff->phone; ?></p>
<p>
	<strong>Cell phone:</strong>
	<?php echo $staff->cell_phone; ?></p>
<p>
	<strong>Profile fields:</strong>
	<?php echo $staff->profile_fields; ?></p>
<p>
	<strong>User:</strong>
	<?php echo $staff->user; ?></p>

<?php echo Html::anchor('admin/staff/edit/'.$staff->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/staff', 'Back'); ?>