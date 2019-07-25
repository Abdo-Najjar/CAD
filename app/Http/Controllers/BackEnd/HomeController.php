<?php

namespace App\Http\Controllers\BackEnd;

use App\Front\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //


    public function index(){
       $rows =  Message::paginate(10);
        return view('back-end.dashboard.home',['rows'=>$rows]);
    }
}
