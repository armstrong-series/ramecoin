<?php

namespace App\Http\Controllers;
use Dotenv\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\WalletModel;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Exception;

class DashboardController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
    }

    public function dashboard(){
        try {

            $user = User::where(['id' => Auth::id()])->first();
            $balance = WalletModel::where('user_id', Auth::id())->where('status', 'success')->sum('amount');
            $data = [
                'page' => 'dashboard',
                'sub' => '',
                'user' => $user,
                'balance' => $balance
            ];
            return view('App.dashboard', $data);
        } catch (Exception $error) {
            Log::info("DashboardController@dashboard error message:" . $error->getMessage());
            $response = [
                'status' =>false,
                "message" => $error
            ];
            return $response;
        }
    }
}
