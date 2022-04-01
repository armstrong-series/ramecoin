<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Mail\sendUserOtpMail;
use App\Models\OTPModel;
use Exception;
use Illuminate\Support\Facades\Mail;



class WithdrawalController extends Controller
{
    public function __construct(){
        $this->middleware('password.confirm');
    }



    public function withdrawal(){

        $data = [
            'page' => 'wallet-fund'
        ];
        return view('App.withdrawal', $data);
        
    }


    public function generateWithdrawalOTP(Request $request){
        try {
        
            $user = Auth::user();
            // $user = User::where('email', Auth::user()->email)->first();
            $otp = OTPModel::where('user_id', Auth::id())->first();
            if($otp){
                $random = rand(1000,9999);
                $otp->otp = $random;
                $otp->expires_at = now()->addMinutes(30);
                $otp->save(); 
                Mail::to($user->email)->send(new sendUserOtpMail($user)); 
                return response()->json(["message" => "OTP generated. Check your mail"], 200);
            }
            return true;

        } catch (Exception $error) {
            Log::info("ErrorMessage". $error->getMessage());
            return false;
        }
    }


    public function proceedWithdrawal(Request $request){
        try {
            $user = Auth::user();
            if($request->all()){
                $message = "All fields are required!";
                return response()->json(["message" => $message], 400);
            }
            if($request->otp != $user->otp){
                $message =  "Invalid OTP";
                return response()->json(["message" => $message], 400);
            }


        } catch (Exception $error) {
            Log::info("ErrorMessage". $error->getMessage());
            return false;
        }
    }


   

  
       
    

}
