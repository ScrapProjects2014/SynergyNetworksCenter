<h2>Viewing #<?php echo $contact->id; ?></h2>

<p>
	<strong>First name:</strong>
	<?php echo $contact->first_name; ?></p>
<p>
	<strong>Last name:</strong>
	<?php echo $contact->last_name; ?></p>
<p>
	<strong>Phone:</strong>
	<?php echo $contact->phone; ?></p>
<p>
	<strong>Email:</strong>
	<?php echo $contact->email; ?></p>
<p>
	<strong>Modified date:</strong>
	<?php echo $contact->modified_date; ?></p>
<p>
	<strong>Modified by:</strong>
	<?php echo $contact->modified_by; ?></p>

<?php echo Html::anchor('admin/contacts/edit/'.$contact->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/contacts', 'Back'); ?>