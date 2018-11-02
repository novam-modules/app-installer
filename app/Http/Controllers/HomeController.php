<?php

namespace App\Http\Controllers;

use App\Models\Sys\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
    }

    public function __invoke()
    {
        return $this->index();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $acct = $user->account;
        
        if($acct->db == null || $acct->mail == null){
            return view('install');

        } else {
            // setting('database', [
            //     //Logic goes here for mail and db configurations
            // ]);            
        }
        return redirect('admin/dashboard');
    }

    public function install(Request $request)
    {
        $user = $request->user();
        
        try{
            $acct       = $user->account;
            $acct->db   = $db = $request->DB;
            $acct->mail = $mail = $request->MAIL;
            $acct->save();           
            
            
            $Setting = Setting::firstOrCreate(['acct_id' => $acct->id]);
            $Setting->update(compact('db', 'mail')+['admin_id' => $user->id]);

            $success = 'Successfully updated your account';
            return back()->with('status', compact('success'));


        } catch(\Exception $ex){
            $error = $ex->getMessage();
            return back()->with('status', compact('error'));
        }
    }

    public function setEnv()
    {

    }
}
