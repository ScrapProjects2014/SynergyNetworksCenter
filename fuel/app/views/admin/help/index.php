<h2>Listing Helps</h2>
<br>
<?php if ($helps): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($helps as $item): ?>		<tr>

			<td>
				<?php echo Html::anchor('admin/help/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/help/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/help/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Helps.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/help/create', 'Add new Help', array('class' => 'btn btn-success')); ?>

</p>
