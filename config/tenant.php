<?php

if(!isset($_COOKIE["PHPSESSID"])) session_start();

$domain =  explode('.', $_SERVER['HTTP_HOST'])[0];

$config = storage_path("app/configs/$domain.php");

if(file_exists($config)){
    return storage_path("app/configs/$domain.php");
}
return [];
