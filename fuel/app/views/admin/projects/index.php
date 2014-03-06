<h2>Listing Projects</h2>
<br>
<?php if ($projects): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Title</th>
			<th>Job type</th>
			<th>Status</th>
			<th>Progress</th>
			<th>Live</th>
			<th>Testing</th>
			<th>Notes</th>
			<th>Developer</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($projects as $item): ?>		<tr>

			<td><?php echo $item->title; ?></td>
			<td><?php echo $item->job_type; ?></td>
			<td><?php echo $item->status; ?></td>
			<td><?php echo $item->progress; ?></td>
			<td><?php echo $item->live; ?></td>
			<td><?php echo $item->testing; ?></td>
			<td><?php echo $item->notes; ?></td>
			<td><?php echo $item->developer; ?></td>
			<td>
				<?php echo Html::anchor('admin/projects/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/projects/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/projects/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Projects.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/projects/create', 'Add new Project', array('class' => 'btn btn-success')); ?>

</p>
