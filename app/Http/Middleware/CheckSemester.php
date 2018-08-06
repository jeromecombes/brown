<?php

namespace App\Http\Middleware;

use Closure;
use App\Semester;
use Illuminate\Support\Facades\Auth;


class CheckSemester
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
        $semester = $request->session()->get('semester');
        $exist = Semester::find($semester);
        
        if(Auth::user()->admin and (empty($semester) or !$exist))
          {
          return redirect('/semester');
          }

        return $next($request);
    }
}
