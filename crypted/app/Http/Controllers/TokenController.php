<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Crypt;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Input;

use App\Voter;

class TokenController extends Controller
{
    private function getSuperKey(){
        return 'thereisnothingicando';
    }

    private function encry($token){
        $dynamicKey = 'xxxxx'.date('dDznYGH').'xxxxx';
        Config::set('app.key',$dynamicKey);
        $enc1 = Crypt::encrypt($token);
        Config::set('app.key',$this->getSuperKey());
        $enc2 = Crypt::encrypt($dynamicKey);
        // send to server
        return $this->server_decrypt($enc1,$enc2);
    }

    public function index(){
        $token = Input::get('token');
        if($this->encry($token) == 'Gagal'){
            return redirect()->back();
        } else {
            return redirect('pilih');
        }
    }

    public function server_decrypt($enc1,$enc2){
        Config::set('app.key',$this->getSuperKey());
        $dynamicKey = Crypt::decrypt($enc2);
        Config::set('app.key',$dynamicKey);
        $token = Crypt::decrypt($enc1);
        $status = 'Gagal';
        $voter = Voter::where('token',$token)->first();
        if($voter){
//            dd($voter->token_exp);
            $date = $voter->token_exp;
            $currentDate = strtotime($date);
            if($currentDate > strtotime(date("Y-m-d H:i:s"))){
                $ip = Request::ip();
                $voter->session_ip = $ip;
                    $date = date("Y-m-d H:i:s");
                    $currentDate = strtotime($date);
                    $futureDate = $currentDate+(60*5);
                    $formatDate = date("Y-m-d H:i:s", $futureDate);
                $voter->session_exp = $formatDate;
                $voter->save();
                $status = 'Sukses';
            }
        }

        return $status;
    }
}
