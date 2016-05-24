<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use App\Voter;

class SessionController extends Controller
{
    private function check(){
        if (Session::has('avafiore')){
            $check = Voter::where('ktp',Session::get('avafiore'))->first();
            $currentDate = strtotime($check->session_exp);
//        dd($currentDate,date("Y-m-d H:i:s"));
            if($currentDate < strtotime(date("Y-m-d H:i:s"))){
                Session::flush();
                return 0;
            } else {
                return 1;
            }
        } else {
            return 0;
        }

    }

    public function pilih(){
        if($this->check()){
            return view('pilih');
        } else {
            return redirect('/');
        }
    }

    public function pres(){
        if($this->check()){
            return view('pres');
        } else {
            return redirect('/');
        }
    }

    public function dpr(){
        if($this->check()){
            return view('dpr');
        } else {
            return redirect('/');
        }
    }
}
