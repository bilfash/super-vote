<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Http\Requests;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Input;

use App\Voter;

class SMSController extends Controller
{
    private function getSuperKey(){
        return 'themapthatleadstoyou';
    }

    private function getSeparator(){
        return '<>%^&<>';
    }

    public function server_decrypt(){
        $enc1 = Input::get('enc1');
        $enc2 = Input::get('enc2');
//        dd(Input::all());
        Config::set('app.key',$this->getSuperKey());
        $dynamicKey = Crypt::decrypt($enc2);
        Config::set('app.key',$dynamicKey);
        $concat = Crypt::decrypt($enc1);
        $token = '';
        $exp = explode($this->getSeparator(),$concat);
        if(count($exp) == 2){
            if(substr($exp[0],0,5) == substr($dynamicKey,0,5) && substr($exp[1],-5,5) == substr($dynamicKey,-5,5)){
                $voter = Voter::where('ktp',$exp[0])->where('telp',$exp[1])->first();
                if($voter){
                    //lakukan query token disini
                    $token = substr(bcrypt($concat),9,10);
                    $voter->token = $token;
                        $date = date("Y-m-d H:i:s");
                        $currentDate = strtotime($date);
                        $futureDate = $currentDate+(60*5);
                        $formatDate = date("Y-m-d H:i:s", $futureDate);
                    $voter->token_exp = $formatDate;
                    $voter->save();

                    //panggil sms
                }

            }
        }
        return $token;
    }

}
