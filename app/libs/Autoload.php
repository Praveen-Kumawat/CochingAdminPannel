<?php
class Autoload{
    public function __construct()
        {
            Session::init();
            $robj = request();
            $controller = $robj->controller;
            $method = $robj->method;
            $para = $robj->para;
            $path = "app/controllers/$controller.php";
            if(file_exists($path)){
                include_once $path;
                $cobj = new $controller();
                if(method_exists($cobj,$method)){
                    $response = $cobj->$method($para);
                    echo "<pre>";
                    print_r($response);
                    echo "</pre>";
                }else{
                    echo "ERROR 404 : Method Not Found";
                }
            }else{
                echo "ERROR 404 : File Not Found";

            }
        }
}

?>