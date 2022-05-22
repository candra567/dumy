<?php

namespace App\Http\Middleware;

use App\Models\Consultan;
use App\Models\UsersVaksin;
use Closure;
use Illuminate\Http\Request;
class VaksinAccepted
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
        $data_consultan=Consultan::join('societies','society_id','=','id_societies')->where('login_tokens',$request->token
        )->where('status','pending')->first();
        // return response()->json([$data_consultan]);
        if (empty($data_users)) {
            return response()->json([
               'message'=>'Users Invalid'
            ],401);
        }
        else if(!empty($data_consultan)){
            return response()->json([
                'message'=>'Status anda masih pending (untuk testing developer gunakan data akun yang sudah di acepted)'
             ],401);
        }
        return $next($request);
    }
}
