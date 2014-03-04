<?php
return array(
	'version' => 
	array(
		'app' => 
		array(
			'default' => 
			array(
				0 => '001_create_users',
				1 => '002_create_posts',
				2 => '003_create_clients',
				3 => '004_add_profile_fields_to_clients',
				4 => '005_add_phone_to_users',
				5 => '006_create_contacts',
				6 => '007_rename_field_site_to_company_in_clients',
				7 => '008_rename_field_web_address_to_website_in_clients',
				8 => '009_create_clientscontacts',
				9 => '010_create_projects',
				10 => '011_add_field_to_contacts',
				11 => '012_rename_field_client_to_client_id_in_contacts',
				12 => '013_create_staffs',
			),
		),
		'module' => 
		array(
		),
		'package' => 
		array(
			'auth' => 
			array(
				0 => '001_auth_create_usertables',
				1 => '002_auth_create_grouptables',
				2 => '003_auth_create_roletables',
				3 => '004_auth_create_permissiontables',
				4 => '005_auth_create_authdefaults',
				5 => '006_auth_add_authactions',
				6 => '007_auth_add_permissionsfilter',
				7 => '008_auth_create_providers',
				8 => '009_auth_create_oauth2tables',
				9 => '010_auth_fix_jointables',
			),
		),
	),
	'folder' => 'migrations/',
	'table' => 'migration',
);
