<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\WalletModel;
use FFI\Exception;
use Validator;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }




    public function users(Request $request){
        try {
        
            if (Auth::user()->user_type === 'admin' || Auth::user()->user_type === 'support') {
                $users = User::all();
                $member = User::where('role', 'member')->get();
                $admin = User::where('role', 'admin')->get();
                $support = User::where('role', 'support')->get();
                $currentUser = Auth::user();

                $data = [
                    'page' => 'admin',
                    'admin' => 'admin',
                    'users' => $users,                   
                ];
                return view('Admin.admin-dashboard', $data);

            } else {
                return redirect()->back();
            }
               
        }catch (Exception $error) {
            Log::info("Admin\AdminController@users error message:" . $error->getMessage());
            $response = [
                'status' =>false,
                "message" => $error
            ];
            return $response;
        }
    }




    public function transactionHistory(Request $request){
        try {
            

            $transactions = WalletModel::all();
            $data = [
                'page' => 'admin-transaction',
                'transactions' =>  $transactions
            ];
            return view('App.Admin.transaction', $data);
            } catch (Exception $error) {
                Log::info("Admin\AdminController@transactionHistory error message:" . $error->getMessage());
                $response = [
                    'status' =>false,
                    "message" => $error
                ];
                return $response;
                }
        }

    public function deleteTransaction(Request $request){
        try {
            $transaction = WalletModel::where('id', $request->id)->first();
            if(!$transaction){
                $message = "Unknown Transaction!";
                return response()->json(["message" => $message], 400);
            }
            $transaction->delete();
            $message = "Transaction Deleted!";
            return response()->json(["message" => $message], 200);

        } catch (Exception $error) {
            Log::info("Admin\AdminController@deleteTransaction error message:" . $error->getMessage());
            $response = [
                'status' =>false,
                "message" => $error
            ];
            return $response;
        }
    }

     public function userManagement(Request $request){
        try {
        
            if (Auth::user()->user_type === 'admin' || Auth::user()->user_type === 'support') {
                $users = User::all();
    
                $data = [
                    'page' => 'user-management',
                    'users' => $users,                   
                ];
                return view('Admin.user-management', $data);

            } else {
                return redirect()->back();
            }
               
        }catch (Exception $error) {
            Log::info("Admin\AdminController@userManagement error message:" . $error->getMessage());
            $response = [
                'status' =>false,
                "message" => $error
            ];
            return $response;
         }
    }




    public function createUser(Request $request)
    {
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
            $user->mobile = $request->mobile;
            $user->role = $request->role;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->uuid = (string) \Str::uuid();
            $user->save();

            if ($user->save()) {
                return response()->json([
                    'message' => "User created successfully",
                ],200);
            }

        } catch (Exception $error) {
            Log::info("Admin\AdminController@createUser error message:" . $error->getMessage());
            $response = [
                'status' =>false,
                "message" => $error
            ];
            return $response;
        }
    }


    public function updateUser(Request $request)
    {
        try {
            $user = User::where('id', $request->id)->first();
            if(!$user){
                return response()->json(['message' => "User not found!"],404); 
            }
            $user->name = $request->name ? $request->name : $user->name;
            $user->email = $request->email ? $request->email : $user->email;
            $user->password = Hash::make($request->password) ? Hash::make($request->password) : $user->password;
            $user->save();
            return response()->json(["message" => "Updated successfully!"], 200);
           
        } catch (Exception $error) {
            Log::info("Admin\AdminController@updateUser error message:" . $error->getMessage());
            $response = [
                'status' =>false,
                "message" => $error
            ];
            return $response;
        }
    }


    public function deleteUser($id)
    {
        try {
            $user = User::where('id', $id)->first();
            if(!$user){
                return response()->json(['message' => "User not found!"],404); 
            }
            $user->delete();
            return response()->json(["message" => "User deleted successfully!"], 200);
           
        } catch (Exception $error) {
            Log::info("Admin\AdminController@deleteUser error message:" . $error->getMessage());
            $response = [
                'status' =>false,
                "message" => $error
            ];
            return $response;
        }
    }

    protected function validator(array $data) {
		return Validator::make($data, [
			'name' => ['required', 'string', 'max:255'],
			'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
			'password' => ['required', 'string', 'min:6', 'confirmed'],
			'role' => ['required', 'string'],
		]);
	}


}
