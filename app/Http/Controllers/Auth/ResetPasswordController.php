<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Log;
use Session;
use Auth;
use Exception;
use Validator;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';


    public function __construct()
    {
        $this->middleware('guest');
    }


    public function resetPassword($token)
    {
        try {
            $user = User::where(['token' => $token])->first();

            if ($user) {
                $data = array('user' => $user);
                return view('Auth.reset-password', $data);
            } else {
                return redirect()->redirectToRoute('auth.login');
            }
        } catch (Exception $error) {
            Log::info('error message: ' . $error->getMessage());

            $message = 'Unable to complete request, please try again';
            Session::put('errorMessage', $message);
            return redirect()->redirectToRoute('auth.login');
        }
    }

    public function updatePassword(Request $request)
    {
        try {
            $validator = $this->validator($request->all());

            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            $user = User::where('token', $request->input('token'))->first();

            if ($user) {

                $user->password = bcrypt($request->input('password'));
                $user->token = null;
                $user->save();

                $message = 'Your password has been reset.';
                \Session::put('successfulMessage', $message);

                return redirect('/login');
            } else {
                $message = 'please use the reset link to your mail';
                \Session::put('errorMessage', $message);
                return redirect()->back();
            }

        } catch (Exception $error) {
            Log::info('error message: ' . $error->getMessage());

            $message = 'Unable to complete request, please try again';
            \Session::put('errorMessage', $message);
            return redirect('/login');
        }
    }



    protected function validator(array $data)
    {
        return Validator::make($data, [
            'password' => 'required|min:6|same:re-type_password',
            'token' => 'required',
        ]);
    }

}
