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


    // public function authenticate(Request $request){

    //     try {

        
    //         $credentials = $request->only('password');
    //         $validator = Validator::make($credentials, [
    //             'password' => 'required|between:6,255',
    //             'confirm_password' => 'required|same:password',
    //         ]);

    //         if ($validator->fails()) {
    //             $message = $validator->errors()->all();
    //             foreach ($message as $messages) {
    //                 return response()->json(['message' => $messages], 400);
    //             }
    //         }


    //         if (!Auth::attempt($credentials)) {
    //             return response()->json(['error' => 'Unauthorized'], 401);
    //         }

    //         return view('App.');
    
    //     } catch (Exception $error) {
    //         Log::info('Oauth\OauthController@authenticate error message:' . $error->getMessage());
    //         $message = 'Unable to login, Try again.';
    //         return $message;
    //     }
    // }


    public function authenticate(Request $request)
    {
        

        $credentials = $request->only('email','password');

        $validator = Validator::make($credentials, [
            'password' => 'required|between:6,255',
            'confirm_password' => 'required|same:password',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('withdrawal.confirmation');
            // return redirect()->intended('dashboard');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

}
