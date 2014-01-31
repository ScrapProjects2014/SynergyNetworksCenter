<?php echo render('admin\posts/_form'); ?>
<p>
	<?php echo Html::anchor('admin/posts/view/'.$post->id, 'View'); ?> |
	<?php echo Html::anchor('admin/posts', 'Back'); ?></p>
