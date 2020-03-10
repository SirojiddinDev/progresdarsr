<?php

class Application
{
    public function __construct()
    {
        $request = $_SERVER['REQUEST_URI'];
        $request = ltrim($request, '/');
        $request_array = explode('/', $request);

        $class_name = 'SiteController';

        if (strlen($request_array[0]) > 0) {
            $class_name = ucfirst($request_array[0]).'Controller';
        }

        $file = 'controllers/' . $class_name . '.php';
        require $file;

        $app = new $class_name();

        $method = 'index';

        if(isset($request_array[1]))
            $method = $request_array[1];

        if(isset($request_array[2]))
            $app->$method($request_array[2]);
        else
            $app->$method();
    }

}