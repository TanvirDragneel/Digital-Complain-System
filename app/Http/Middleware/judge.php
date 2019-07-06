<?php

namespace App\Http\Middleware;
use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class judge
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
        $permission = User::all()->where('id','=',Auth::id());
        foreach ($permission as $p)
        {
            $pre = $p['permission'];
        }
        if($pre == 1)
        {
            return redirect()->route('home');
        }
        return $next($request);
    }
}
