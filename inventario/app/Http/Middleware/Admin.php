<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class Admin
{

    protected $auth;


    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        dd($this->auth->user()->admin());
        if($this->auth->user()->admin())
        {
          return $next($request);
        }else{
          return redirect()->route('front.index');
        }
    }
}
