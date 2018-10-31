<?php

namespace App\Http\Controllers\Sys;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    //
    public function __invoke()
    {
        return view('sys.settings.index');
    }
}
