<?php
return array(
	// '_root_'  => 'admin/login',  // The default route
	'_root_' => 'welcome/index',
	'_404_'   => 'welcome/404',    // The main 404 route
	
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
);