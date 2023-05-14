<?php

class Simplex
{
	public function __construct()
	{
		// Initialize the flag to false.
		$flag = FALSE;

		// Check if the GET request has a path parameter.
		if (isset ($_GET['path']))
		{
			// Split the path parameter into tokens.
			$tokens = explode('/', rtrim($_GET['path'], '/'));

			// Get the name of the controller class.
			$controllerName = ucfirst(array_shift($tokens));

			// Check if the controller class exists.
			if (file_exists('Controllers/' . $controllerName . '.php')) {
				// Create a new instance of the controller class.
				$controller = new $controllerName();

				// Check if the GET request has an action parameter.
				if (!empty($tokens)) {
					// Get the name of the action method.
					$actionName = array_shift($tokens);

					// Check if the action method exists.
					if (method_exists ($controller, $actionName)) {
						// Call the action method.
						$controller->{$actionName}(@$tokens);
					}
					else {
						// Set the flag to true.
						$flag = TRUE;
					}
				}
				else {
					// Call the index method of the controller.
					$controller->index();
				}
			}
			else {
				// Set the flag to true.
				$flag = TRUE;
			}
		}
		else
		{
			// Set the controller name to Home.
			$controllerName = 'Home';

			// Create a new instance of the controller class.
			$controller = new $controllerName();

			// Call the index method of the controller.
			$controller->index();
		}

		// If the flag is true, call the Error404 method of the Errors controller.
		if ($flag) 
		{
			$controllerName = 'Errors';
			$controller = new $controllerName();
			$controller->Error404();
		}
	}
}