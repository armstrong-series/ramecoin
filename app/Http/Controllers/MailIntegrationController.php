<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MailIntegrationModel;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Exception;

class MailIntegrationController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }



    public function mailSetup(){

        $data = [
            'page' => 'mailintegration'
        ];
        return view('Settings.mail_integrations', $data);
    }



    public function  setupEmailIntegration(Request $request){
        try {
            //code...
        } catch (Exception $error) {
            Log::info("ErrorMessage" .$error->getMessage());
        }
    }




}
