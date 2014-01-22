<h2>Viewing <span class='muted'>#<?php echo $hello->id; ?></span></h2>

<p>
	<strong>Name:</strong>
	<?php echo $hello->name; ?></p>
<p>
	<strong>Description:</strong>
	<?php echo $hello->description; ?></p>

<?php echo Html::anchor('hello/edit/'.$hello->id, 'Edit'); ?> |
<?php echo Html::anchor('hello', 'Back'); ?>