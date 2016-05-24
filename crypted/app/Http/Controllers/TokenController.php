<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Crypt;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

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
        $post_data['enc1'] = $enc1;
        $post_data['enc2'] = $enc2;

        foreach ( $post_data as $key => $value) {
            $post_items[] = $key . '=' . $value;
        }

        $post_string = implode ('&', $post_items);

//        $post_string = '?' . $post_string;

        $data_length = strlen($post_string);

        $connection = fsockopen('localhost', 80);

        fputs($connection, "POST  /super-vote/server/public/checktoken  HTTP/1.1\r\n");
        fputs($connection, "Host:  www.domainname.com \r\n");
        fputs($connection,
            "Content-Type: application/x-www-form-urlencoded\r\n");
        fputs($connection, "Content-Length: $data_length\r\n");
        fputs($connection, "Connection: close\r\n\r\n");
        fputs($connection, $post_string);

        while($lala = fgets($connection)){
            $lili = $lala;
        }
        fclose($connection);
        return $lili;
    }

    public function index(){
        $token = Input::get('token');
        $conn = $this->encry($token);
        if($conn == 'Gagal'){
            Session::flash('notif', 'User Tidak Ditemukan');
            return redirect()->back();
        } else {
            Session::put('avafiore',$conn);
            return redirect('pilih');
        }
    }

}
