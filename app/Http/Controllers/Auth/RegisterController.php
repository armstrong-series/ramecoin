<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Exception, Auth, Log;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data) {
        return Validator::make($data, [
            'name' => 'required|string',
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i|unique:users',
            'password' => 'required|between:6,255',
            'confirm_password' => 'required|same:password',
        ]);
	}


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
   


    public function account(){

        return view('Auth.register');

    }
    public function createUser(Request $request){
        try {



            $validator = $this->validator($request->all());
            if ($validator->fails()) {
                $message = $validator->errors()->all();
                foreach ($message as $messages) {
                    return response()->json(['message' => $messages], 400);
                }
    
            }

            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->role = 'member';
            $user->password = Hash::make($request->password);
            $user->uuid = (string) \Str::uuid();
            // dd($user);
            $user->save();
            $message = "Account Created!";
            return response()->json(['message' => $message,'user' => $user], 200);

        } catch (Exception $error) {
            Log::info("UserController::class, 'createAccount'" . $error->getMessage());
            $message = 'Unable to get information. Please try checking your network';
            return $error;
        }
    }
}
