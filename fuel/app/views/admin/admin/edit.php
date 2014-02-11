<h2>Editing Admin</h2>
<br>

<?php echo render('admin\admin/_form'); ?>
<p>
	<?php echo Html::anchor('admin/admin/view/'.$admin->id, 'View'); ?> |
	<?php echo Html::anchor('admin/admin', 'Back'); ?></p>
