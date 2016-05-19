<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    private function processTelp($data){
        dd($data);
    }

    public function insertToken()
    {
        // dd(Input::all());
        $send['enc1'] = Input::get('telp');
        $send['enc2'] = Input::get('ktp');
        $this->processTelp($send);
    }
}
