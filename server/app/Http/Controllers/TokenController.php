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

    public function server_decrypt(){
        $enc1 = Input::get('enc1');
        $enc2 = Input::get('enc2');
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
                    $futureDate = $currentDate+(60*2);
                    $formatDate = date("Y-m-d H:i:s", $futureDate);
                $voter->session_exp = $formatDate;
                $voter->save();
                $status = $voter->ktp;
            }
        }

        return $status;
    }
}
