<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvestmentPlanController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }



    public function plans(){

        $data = [
            'page' => 'plans'
        ];

        return view('App.investmentplan', $data);
    }

}
