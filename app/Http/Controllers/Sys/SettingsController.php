<?php

namespace App\Http\Controllers\Sys;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    //
    public function __invoke()
    {
        
    }

    public function index()
    {
        $data['Configs'] = []; //settings();
        return view('content.sys.settings.index', $data);
    }

    public function store(Request $request)
    {
        dump($request->all());
    }
}
