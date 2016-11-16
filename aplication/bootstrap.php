<?php
class Bootstrap
{
	public static function run(Request $petition){
		$controllerName = $petition->getController()."Controller";
		$routeController = ROOT."controllers".DS.$controllerName.".php";
		$method = $petition->getMethod();
		$args = $petition->getArgs();


		if (is_readable($routeController)) {
			include_once($routeController);
			$controller = new $controllerName;

			if ($method=="login") {
				
			}else{
				Authorization::logged();
			}

			if (is_callable(array($controllerName, $method))) {
				$method = $petition->getMethod();
		    }else{
			      $method = "index";
		    }
		    if(!empty($args)){
			    call_user_func_array(array($controller, $method), $args);
		    }else{
			    call_user_func(array($controller, $method));
			}

		}else{
			throw new Exception("Controlador no encontrado", 1);
		}


	}
}
