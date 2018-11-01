<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function __invoke(Request $request, $action = 'index')
    {
        return $this->$action($request);
    }

    public function index()
    {
        return request()->is("*my*")?
            view('content.dash.index', ['content' => $this->userportal()]):
            view('content.dash.index', ['content' => $this->dashboard()]);
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function dashboard()
    {
        $user    = request()->user();
        $acct    = $user->account;
        $group   = $user->group;
        $profile = $user->profile;
        return view('content.dash.board.index', get_defined_vars());
    }

    public function userportal()
    {
        $user    = request()->user();
        $acct    = $user->account;
        $group   = $user->group;
        $profile = $user->profile;
        return view('content.dash.portal.index', get_defined_vars());
    }

}
