<h2>Viewing <span class='muted'>#<?php echo $profile->id; ?></span></h2>


<?php echo Html::anchor('profile/edit/'.$profile->id, 'Edit'); ?> |
<?php echo Html::anchor('profile', 'Back'); ?>