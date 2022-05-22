<?php

namespace App\Http\Controllers;

use App\Models\Spot;
use App\Models\UsersVaksin;
use App\Models\Vacinations;
use Illuminate\Http\Request;

class SpotController extends Controller
{
    public function index($token){
        $data_users=UsersVaksin::where('login_tokens',$token)->first();
        $data_spot=Spot::join('regionals','regional_id_spot','=','id_regionals')->where('regional_id_spot',$data_users->regional_id)->get();
        return response()->json([
         'message'=>'Request successfully',
         'data'=>$data_spot
        ]);
    }
    public function detail($token,$id){
          $data_spot=Vacinations::join('societies','society_id','=','id_societies')->join('spots','spot_id','=','id_spots')->where('spot_id',$id)->first();
          if (!empty($data_spot)) {
            return response()->json([
                'message'=>'Request http success',
                'data'=>$data_spot
            ]);
          }
          return response()->json([
              'message'=>'No result',
              'data'=>null
          ]);
    }
}
