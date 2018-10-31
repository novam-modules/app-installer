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

        if($key === null) return $settings ?: Config::all();

        return (is_array($key)) ? array_only($settings, $key) : $settings[$key];
    }

}