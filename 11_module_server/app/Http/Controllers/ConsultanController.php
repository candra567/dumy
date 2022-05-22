<?php

namespace App\Http\Controllers;

use App\Models\Consultan;
use App\Models\UsersVaksin;
use Exception;
use Illuminate\Http\Request;

class ConsultanController extends Controller
{
    public function index(Request $request,$token){
        try{
            $data_users=UsersVaksin::where('login_tokens',$token)->first();
            $data_consultan=Consultan::join('societies','society_id','=','id_societies')->where('society_id',$data_users->id_societies)->first();
            if (!empty($data_consultan)) {
                return response()->json([
                    'message'=>'Sepertinya anda sudah mengirim data consultasi (note anda hanya bisa mengirim nya satu kali saja)'
                  ]);
            }
            $disease_history=$request->disease_history;
            $current_symptoms=$request->current_symptoms;
            Consultan::insert([
                'society_id'=>$data_users->id_societies,
                'disease_history'=>$disease_history,
                'current_symptoms'=>$current_symptoms
            ]);
            return response()->json([
              'message'=>'Request send success'
            ]);
        }
        catch(Exception $e){
            return response()->json([
                'message'=>'Server error',
                'body'=>$e->getMessage()
              ],500);
        }
    }
    public function getdata(Request $request,$token){
        $data=Consultan::join('societies','society_id','=','id_societies')->where('login_tokens',$token)->first();
        if (empty($data)) {
           return response()->json([
             'message'=>'Anda belum mengirimkan data consultasi'
           ],402);
        }
        return response()->json([
            'message'=>'Success',
            'data'=>$data
        ]);
    }
}
