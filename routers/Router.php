<?php
class Router
{
    public static function route()
    {
        $controllerName = "UserController";
        $modelName      = "UserModel";
        $action         = "user";

        $route = explode('/', $_SERVER['REQUEST_URI']);
        
        if ($route[1]) {
            $controllerName = ucfirst($route[1] . "Controller");
            $modelName      = ucfirst($route[1] . "Model");

        }
        
        include CONTROLLER_PATH . $controllerName . ".php";
        include MODEL_PATH      . $modelName      . ".php";
        
        if ($route[2]) {
            $action = $route[2];
        }

        $controller = new $controllerName();
        $controller->$action($_REQUEST);
    }
}
