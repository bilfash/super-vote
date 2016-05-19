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

    private function encry($concat){
        $dynamicKey = substr($concat,0,5).date('dDznYGH').substr($concat,-5,5);
        Config::set('app.key',$dynamicKey);
        $enc1 = Crypt::encrypt($concat);
        Config::set('app.key',$this->getSuperKey());
        $enc2 = Crypt::encrypt($dynamicKey);

        // send to server
        return $this->server_decrypt($enc1,$enc2);
    }

    public function index(){
        $KTP = Input::get('KTP');
        $telp = Input::get('telp');
        if($this->encry($KTP.$this->getSeparator().$telp) == ''){
            return redirect()->back();
        } else {
            return redirect('token');
        }
    }

    public function server_decrypt($enc1,$enc2){
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

    public function test(){
        //create array of data to be posted
        $post_data['firstName'] = 'Name';
        $post_data['action'] = 'Register';

//traverse array and prepare data for posting (key1=value1)
        foreach ( $post_data as $key => $value) {
            $post_items[] = $key . '=' . $value;
        }

//create the final string to be posted using implode()
        $post_string = implode ('&', $post_items);

//we also need to add a question mark at the beginning of the string
        $post_string = '?' . $post_string;

//we are going to need the length of the data string
        $data_length = strlen($post_string);

//let's open the connection
        $connection = fsockopen('127.0.0.1', 80);

//sending the data
        fputs($connection, "POST  /super-vote/server/public/api  HTTP/1.1\r\n");
        fputs($connection, "Host:  www.domainname.com \r\n");
        fputs($connection,
            "Content-Type: application/x-www-form-urlencoded\r\n");
        fputs($connection, "Content-Length: $data_length\r\n");
        fputs($connection, "Connection: close\r\n\r\n");
        fputs($connection, $post_string);

        while($lala = fgets($connection)){
            echo $lala;
        }

//closing the connection
        fclose($connection);
    }
}
