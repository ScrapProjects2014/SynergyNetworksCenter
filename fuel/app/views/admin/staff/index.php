<br>
<?php if ($staffs): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>First</th>
			<th>Last</th>
			<th>Email</th>
			<th>Personal email</th>
			<th>Phone</th>
			<th>Cell phone</th>
			<th>Profile fields</th>
			<th>User</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($staffs as $item): ?>		<tr>

			<td><?php echo $item->first; ?></td>
			<td><?php echo $item->last; ?></td>
			<td><?php echo $item->email; ?></td>
			<td><?php echo $item->personal_email; ?></td>
			<td><?php echo $item->phone; ?></td>
			<td><?php echo $item->cell_phone; ?></td>
			<td><?php echo $item->profile_fields; ?></td>
			<td><?php echo $item->user; ?></td>
			<td>
				<?php echo Html::anchor('admin/staff/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/staff/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/staff/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Staffs.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/staff/create', 'Add new Staff', array('class' => 'btn btn-success')); ?>

</p>
