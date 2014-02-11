<h2>Editing Help</h2>
<br>

<?php echo render('admin\help/_form'); ?>
<p>
	<?php echo Html::anchor('admin/help/view/'.$help->id, 'View'); ?> |
	<?php echo Html::anchor('admin/help', 'Back'); ?></p>
