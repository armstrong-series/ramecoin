<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\WalletModel;
use App\Helpers\Paths;
use FFI\Exception;
use Validator;
use Illuminate\Support\Facades\Hash;

class TransactionController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }




    public function deleteUser(Request $request){
        try {
            $user = User::where('id', $request->id)->first(); 
            
            if(!$user){
                $message = "Unknown User!";
                return response()->json(['message' =>  $message],404); 
            }
            $user->delete();
            $message = "Delete successful!";
            return response()->json(["message" => $message, "user" => $user], 200);
           
        } catch (Exception $error) {
            Log::info("Admin\TransactionController@deleteUser error message:" . $error->getMessage());
            $response = [
                'status' =>false,
                "message" => $error
            ];
            return $response;
        }
    }

    
}
