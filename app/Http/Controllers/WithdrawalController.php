<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Log, Auth, Exception;

class WithdrawalController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }




    public function authenticateUser(Request $request){

        return view('App.confirmation');
        
    }


   

    public function authenticateWithdrawal(Request $request){
    
        try{
                // dd($request->all());
                if($request->password ==""){
                    $message = "Please enter your password!";
                    return response()->json(["message" => $message], 400);
    
                }
                $credentials = $request->only('password');
                if (Auth::attempt($credentials)) {
                    $request->session()->regenerate();
                    return redirect()->intended('user.dashboard');
                       
                }
        
                $message = "The provided credentials do not match our records";
                return response()->json(["message" => $message], 401);

                // return back()->withErrors([
                //     'email' => 'The provided credentials do not match our records.',
                // ]);
        }catch(Exception $error){
            Log::info($error->getMessage());
        }
       
    }

}
