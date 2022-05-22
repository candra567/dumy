<?php

namespace App\Http\Middleware;

use App\Models\UsersVaksin;
use Closure;
use Illuminate\Http\Request;

class AuthVaksin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $data_users=UsersVaksin::where('login_tokens',$request->token)->first();
        if (empty($data_users)) {
            return response()->json(
                [
               'message'=>'Invalid token Unauthorized user'
                ]
            ,401);
        }
        return $next($request);
    }
}
