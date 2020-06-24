<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class coronaController extends Controller
{
    public function getData(){


        $total = Http::get('https://api.covidindiatracker.com/total.json');
      
        $data = json_decode($total->getBody(),true);
        $case = Http::get('https://api.covidindiatracker.com/state_data.json');
      
        $totalcase = json_decode($total->getBody(),true);
        $totaldata = json_decode($case->getBody(),true);
       
        return view ('corona',['totaldata'=>$totaldata],['totalcase'=>$totalcase]);
    }
}
