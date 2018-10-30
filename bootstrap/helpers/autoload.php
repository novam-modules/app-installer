<?php
/*
 |----------------------------------------------------
 |          FILE AUTOLOADER
 |----------------------------------------------------
 | This file is the main autoloader for all custom
 | helper files in this directory and deeper
 |
*/

if(!defined('DS')){
    define('DS', DIRECTORY_SEPARATOR);
}

if(!function_exists('FileLoader')){

    function FileLoader($PATH)
    {
        $DIR = glob($PATH .DS. "*");

        foreach($DIR as $path){

            if(__FILE__ == $path)
                continue;

            if(is_dir($path)){
                FileLoader($path);

            } else {
                require_once $path;
            }
        }
    }
}

FileLoader( __DIR__ );
