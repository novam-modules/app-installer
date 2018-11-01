<?php 

use App\Models\Sys\Setting;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;

if(!function_exists('settings')){

    function settings ($key = null)
    {
        static $settings;

        if (is_null($settings)) {
            $settings = Cache::remember('settings', 24 * 60, function () {
                return array_pluck(Setting::all()->toArray(), 'value', 'key');
            });
        }
        if(!$settings) $settings = Config::all();

        if($key === null) return $settings;

        return (is_array($key)) ? array_only($settings, $key) : $settings[$key];
    }

}

if (!function_exists('setting')) {

    function setting($key, $value = null)
    {
        $settings = settings();
        
        if(!is_array($value)){
            $settings[$key] = $value;
            Config::set($key, $value);
            
        } else{
            foreach($value as $k => $val){
                $settings[$key][$k] = $val;
            }
        }
        return $settings;
    }

}