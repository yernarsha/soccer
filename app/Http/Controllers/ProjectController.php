<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProjectController extends Controller
{
    public function getData(Request $request) {
        $user = env('API_USER');
        $token = env('API_TOKEN');
//        $date = date('Y-m-d');
        $date = '2022-09-18';
        $response = Http::get("https://api.soccersapi.com/v2.2/fixtures/?user=".$user."&token=".$token."&t=schedule&d=".$date."&league_id=1005");
//        $response = Http::get("https://api.soccersapi.com/v2.2/livescores/?user=&token=&t=today");

        return view('index', ['response'=>$response]);
    }

    public function about(Request $request) {
        return view('about');
    }

}
