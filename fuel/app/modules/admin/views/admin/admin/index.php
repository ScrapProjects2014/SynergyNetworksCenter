<h2>Listing Admins</h2>
<br>
<?php if ($admins): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($admins as $item): ?>		<tr>

			<td>
				<?php echo Html::anchor('admin/admin/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/admin/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/admin/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Admins.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/admin/create', 'Add new Admin', array('class' => 'btn btn-success')); ?>

</p>
