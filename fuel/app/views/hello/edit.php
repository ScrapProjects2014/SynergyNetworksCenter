<h2>Editing <span class='muted'>Hello</span></h2>
<br>

<?php echo render('hello/_form'); ?>
<p>
	<?php echo Html::anchor('hello/view/'.$hello->id, 'View'); ?> |
	<?php echo Html::anchor('hello', 'Back'); ?></p>
