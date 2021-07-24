<?php

namespace App\Http\Controllers;
use Dotenv\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PageModel;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use FFI\Exception;

class DashboardController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
    }

    public function dashboard(){
        try {
            $dashboard = PageModel::where('user_id', Auth::id())->get();

            $data = [
                'page' => 'dashboard',
                'sub' => ''
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
