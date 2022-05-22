<?php

namespace App\Http\Controllers;

use App\Models\UsersVaksin;
use App\Models\Vacinations;
use Exception;
use Illuminate\Http\Request;

class RegisterVaksinController extends Controller
{
    public function index(Request $request,$token){
        try {
            $data_users=UsersVaksin::where('login_tokens',$token)->first();
            $spot_id=$request->spot_id;
            $date=$request->date;
            if ($spot_id==null||$date==null) {
                return response()->json([
                   'message'=>'Isi format yang valid'
                ],422);
            }
            Vacinations::insert([
                'dose'=>$request->dose,
                'spot_id'=>$spot_id,
                'date'=>$date,
                'society_id'=>$data_users->id_societies
            ]);
            return response()->json([
                'message'=>'Send data success'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message'=>$e->getMessage()
            ],500);
        }
    }
    // 
    public function getdata($token){
        $data=Vacinations::join('societies','society_id','=','id_societies')->join('spots','spot_id','=','id_spots')->where('login_tokens',$token)->first();
        return response()->json([
           'message'=>'Request http succesfully',
           'data'=>$data
        ]);
    }
}
