<?php

	// both main and related object already exist
	$client = Model_Client::find($id);
	$client->contacts[$id] = Model_Contact::find($id);
	$client->save();
	
	
	// nested relationships - method chaining
	$client = Model_Client::query()
			->related('contacts')
			->related('contacts.id')
			->where('contacts.id.active', '=', 1)
			->order_by('contacts.first_name', 'asc')
			->get_one();
			
			// above seems incorrect....