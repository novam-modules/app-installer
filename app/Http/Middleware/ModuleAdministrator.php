<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Sys\Setting;
use Illuminate\Support\Facades\Config;

class ModuleAdministrator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $acct = $request->user()->account;
        if($acct->db == null || $acct->mail == null){
            return redirect('home');
        }
        return $next($request);
    }
}
