<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VideoController extends Controller
{
    public function index() {
        $videos = DB::table('videos')->get();
        return view('main.video',['videos'=>$videos]);
    }

}
