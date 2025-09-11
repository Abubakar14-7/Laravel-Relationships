<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $age = $request->route('age');

        $user = auth()->user();

        // dd($user);

        if($user->status == 'pending')
        {
            return redirect()->route('user.block');
        }
        else{
              return $next($request);
        }

        // if($age < 18)
        // {
        //      return response("Age is: $age  & your are not allowed ");
        // }

        // return $next($request);
    }
}
