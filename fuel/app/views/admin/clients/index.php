<h2>Listing Clients</h2>
<br>
<?php if ($clients): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Site</th>
			<th>Web address</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($clients as $item): ?>		<tr>

			<td><?php echo Html::anchor('admin/clients/view/'.$item->id, $item->site); ?></td>
			<td><?php echo $item->web_address; ?></td>
			<td>
				<?php echo Html::anchor('admin/clients/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/clients/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Clients.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/clients/create', 'Add new Client', array('class' => 'btn btn-success')); ?>

</p>
