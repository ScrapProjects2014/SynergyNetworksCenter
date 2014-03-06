<?php if ($projects): ?>
 <div class="row">

	<!-- Basic Responsive Table -->
	<div class="col-lg-12">
		<div class="portlet portlet-default">
			<div class="portlet-heading">
				<div class="portlet-title">
					<h4>Basic Responsive Table</h4>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="portlet-body">
				<div class="table-responsive">
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
									<ul class="dropdown">
										<li><?php echo Html::anchor('admin/projects/view/'.$item->id, 'View'); ?></li>
										<li><?php echo Html::anchor('admin/projects/edit/'.$item->id, 'Edit'); ?></li>
										<li><?php echo Html::anchor('admin/projects/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?></li>
									</ul>
								</td>
							</tr>
					<?php endforeach; ?>	</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- /.portlet -->
	</div>
	<!-- /.col-lg-6 -->
</div>
<div class="row">
<?php else: ?>
<p>No Projects.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/projects/create', 'Add new Project', array('class' => 'btn btn-success')); ?>

</p>

</div>
