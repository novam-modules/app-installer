<?php

if(!function_exists('user_routes')){

    function user_routes($key = null)
    {
        $routes_prefix = env('ROUTES_PREFIX', "my|admin");

        $user_routes = explode("|", $routes_prefix);

        return $user_routes[$key] ?? $user_routes;
    }
}


if(!function_exists('user_route')){

    function user_route($url = null)
    {
        $url = trim($url, "/\\");

        foreach(user_routes() as $route){
            if(request()->is("$route*")) return $route;
        }
        return $url;
    }
}
