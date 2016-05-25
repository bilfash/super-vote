<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Http\Requests;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

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
        $post_data['enc1'] = $enc1;
        $post_data['enc2'] = $enc2;

        foreach ( $post_data as $key => $value) {
            $post_items[] = $key . '=' . $value;
        }

        $post_string = implode ('&', $post_items);

        $data_length = strlen($post_string);

        $connection = fsockopen('127.0.0.1', 80);

        fputs($connection, "POST  /super-vote/server/public/sendsms  HTTP/1.1\r\n");
        fputs($connection, "Host:  www.domainname.com \r\n");
        fputs($connection,
            "Content-Type: application/x-www-form-urlencoded\r\n");
        fputs($connection, "Content-Length: $data_length\r\n");
        fputs($connection, "Connection: close\r\n\r\n");
        fputs($connection, $post_string);

        while($lala = fgets($connection)){
            $lili = $lala;
//            echo $lala;
        }
//        exit();
        fclose($connection);
        return $lili;
    }

    public function index(){
        $KTP = Input::get('KTP');
        $telp = Input::get('telp');
        $conn = $this->encry($KTP.$this->getSeparator().$telp);
//        dd(strlen($conn));
        if(strlen($conn) == 2){
            Session::flash('notif', 'User Tidak Ditemukan');
            return redirect()->back();
        } else {
            return redirect('token');
        }
    }


}
