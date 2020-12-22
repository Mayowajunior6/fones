<?php
/**
 * middleware for asmin users
 * @file IsAdmin.php
 * @author  Mayowa Ajamu <ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at 2020-12-1
 */

namespace App\Http\Middleware;

use Closure;

class IsAdmin
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
        if(auth()->user() && auth()->user()->isAdmin){
            return $next($request);
        }

        return redirect('home')->with('error',"You don't have admin access. Only admin can access!");
    }
}
