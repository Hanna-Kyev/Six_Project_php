<?php

class Router
{
    public $request;
    protected $routes = ROUTES;

    public function __construct(Request $request)
    {
        $this->request =  $request  !== null ? $request  : new Request();
    }

    private function getController($path){
        $segments = explode('\\', $path);
        list($controller, $action) = explode('@', array_pop($segments));
        $controllerPath = '/';
        foreach ($segments as $segment) {
            $controllerPath .= $segment.'/';
        }
        return [$controllerPath, $controller, $action];
    }

    private function init($controllerPath, $controller, $action, $vars = []) {

        $controllerPath = CONTROLLERS . $controllerPath . $controller . '.php';
        if (file_exists($controllerPath)) {
            include_once $controllerPath;
            $controller = new $controller;
            
            if (! method_exists($controller, $action)) {
                throw new Exception(
                    "{$controller} does not respond to the {$action} action."
                );
            }
        } else {
            throw new Exception(
                "File {$controllerPath} does not exists."
            );
        }
        return $controller->$action($vars);
    }

    public function run()
    {   
        if (array_key_exists($this->request->uri(), $this->routes)) {
            return $this->init(...$this->getController($this->routes[$this->request->uri()]));
        } else {
            foreach ($this->routes as $key => $val) {
                $pattern = "@^" .preg_replace('/{([a-zA-Z0-9]+)}/', '(?<$1>[0-9]+)', $key). "$@";
                preg_match($pattern, $this->request->uri(), $matches);
                array_shift($matches);
                if ($matches) {
                    $arr = $this->getController($val);
                    $arr[] = $matches;
                    return $this->init(...$arr);
                }
            }  
            
        }
        return $this->init(...$this->getController($this->routes['404']));
    }
    
}



