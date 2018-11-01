<?php

namespace App\Http\Controllers\Sys;

use App\Models\Sys\Setting;
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
        $data['Settings'] = settings();
        return view('content.sys.settings.index', $data);
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        $data['user_id'] = $request->user()->id;
        $data['acct_id'] = $request->user()->acct_id;
        Setting::create($data);
        return back()->with('success', 'Nicely done!');
    }
}
