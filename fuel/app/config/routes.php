<?php
return array(
	'_root_'  => 'admin',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route
	
	'hello(/:name)?' => array('admin', 'name' => 'hello'),
);