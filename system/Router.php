<?php


namespace system;


class Router {
    public function loadPage(){

        $path = $_SERVER['REQUEST_URI'];
        $pathArray = explode('/', $path);
        $magicNumber = 3;



        $className = $pathArray[$magicNumber] ? ucfirst(strtolower($pathArray[$magicNumber])):'Main';
        $methodName = $pathArray[$magicNumber +1] ? $pathArray[$magicNumber +1]: "index" ;
        $args = array_splice($pathArray, $magicNumber +2);

        $className = "\\components\\controllers\\" . $className;



        if(class_exists($className)){
            $obj = new $className();

            if(method_exists($obj, $methodName)){
                $obj->$methodName();
            } else {
                echo "ERROR 404. Method not exists";
            }


        } else {
            echo "ERROR 404. Class not exists";
        }

    }


}