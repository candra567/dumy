<?php

namespace App\Http\Controllers;

use App\Models\UsersVaksin;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\TryCatch;

class AuthController extends Controller
{
    public function index(Request $request){
       try {
            $id_card_number=$request->id_card_number;
            $password=$request->password;
            $data_users=UsersVaksin::join('regionals','regional_id','=','id_regionals')->where('id_card_number',$id_card_number)->first();
            if(!empty($data_users)){
                if($data_users->password==$password){
                    $data_users->login_tokens=md5($id_card_number);
                    $data_users->save();
                    return response()->json([
                    'message'=>'Login SucessFully',
                    'data'=>$data_users,
                    'token'=>md5($data_users->id_card_number)
                    ]);
                }
                else{
                    return response()->json([
                     'message'=>'Password Incorrect'
                    ],401);
                }
            }  
            else{
                return response()->json([
                    'message'=>'Id card no register'
                ],401);
            }
       } catch (Exception $e) {
           return response()->json([
            'message'=>'SERVER ERROR',
            'body'=>$e->getMessage()
           ],500);
       }
    }
    public function logout($token){
        try{
            $data_users=UsersVaksin::where('login_tokens',$token)->first();
            $data_users->login_tokens=null;
            $data_users->save();
            return response()->json([
              'message'=>'Logout berhasil ,login kembali untuk mengaktifkan token'
            ]);
        }
        catch(Exception $e){
            return response()->json([
                'message'=>$e->getMessage()
              ],500);
        }
    }
}
?>
<table>
    <thead>
        <tr>
            <th>Url</th>
            <th>Params</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>http://127.0.0.1:8000/api/v1/auth/login</td>
            <td></td>
            <td>No params</td>
        </tr>
        <tr>
            <td>http://127.0.0.1:8000/api/v1/auth/logout?token</td>
            <td>Token</td>
            <td>Required</td>
        </tr>
        <tr>
            <td>http://127.0.0.1:8000/api/v1/consultations?token</td>
            <td>Token</td>
            <td>Required</td>
        </tr>
    </tbody>
</table>