<?php

spl_autoload_register(

    function($classname){
        $filename = ROOT."core/".$classname.".php";

        if (!file_exists($filename)){
            $filename = ROOT."models/".$classname.".php";
        };
        require_once $filename;

    }

);