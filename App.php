<?php


class App
{
	private $controller = 'Home';
	private $method 	= 'index';

	private function splitURL()
	{
		$URL = $_GET['url'] ?? 'home';
		$URL = explode("/", trim($URL,"/"));
		return $URL;	
	}

	public function loadController()
	{
		$URL = $this->splitURL();

		/** select controller **/
		$filename = "../app/controllers/".ucfirst($URL[0]).".php";
		if(file_exists($filename))
		{
			require $filename;
			$this->controller = ucfirst($URL[0]);
			unset($URL[0]);
		}else{

			$filename = "../app/controllers/_404.php";
			require $filename;
			$this->controller = "_404";
		}

		$controller = new $this->controller;

		/** select method **/
		if(!empty($URL[1]))
		{
			if(method_exists($controller, $URL[1]))
			{
				$this->method = $URL[1];
				unset($URL[1]);
			}	
		}

		call_user_func_array([$controller,$this->method], $URL);

	}	
 
     public function __construct() {
        // Define the base folder (adjust if your project is in a subdirectory)
        $baseFolder = '/test1mvc/public';

        // Parse the URL and remove the base folder
        $url = isset($_SERVER['REQUEST_URI']) ? parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) : '';
        $url = trim(str_replace($baseFolder, '', $url), '/');

      

        // Match dynamic category routes
        if (preg_match('/^category\/([a-zA-Z0-9-]+)$/', $url, $matches)) {
            $slug = $matches[1];
           ;
            $controller = new CategoryController();
            $controller->index($slug);
            return;
        }

     
    }
}






