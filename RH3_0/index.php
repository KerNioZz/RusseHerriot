<?php

try {
	
	$action = $_GET;

	switch ($action) {
		case 'index':
			spl_autoload_register(function($class) {
				require_once('./src/controllers/IndexController.php');
			});
			$indexController = new IndexController($action);
			$indexController->showIndex();
			break;

		default:
			spl_autoload_register(function($class) {
				require_once('./src/controllers/IndexController.php');
			});
			$indexController = new IndexController($action);
			$indexController->showIndex();			
			break;
	}

} catch (Exception $e) {
	
}