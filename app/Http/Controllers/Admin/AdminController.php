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
        
            if (Auth::user()->role === 'admin' || Auth::user()->role === 'support') {
                $user = User::where('id', Auth::id())->first();
                $member = User::where('role', 'member')->get();
                $usersCount = count($member);
                $admin = User::where('role', 'admin')->get();
                $support = User::where('role', 'support')->get();
                $currentUser = Auth::user();

                $data = [
                    'page' => 'admin',
                    'admin' => $admin,
                    'support' => $support,
                    'user' => $user,  
                    'usersCount' => $usersCount                 
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
            return view('Admin.transactions', $data);
            } catch (Exception $error) {
                Log::info("Admin\AdminController@transactionHistory error message:" . $error->getMessage());
                $response = [
                    'status' =>false,
                    "message" => $error
                ];
                return $response;
                }
        }


        public function updateTransactionStatus(Request $request){
            $transaction = WalletModel::where('id', $request->id)->first();
            if(!$transaction){
                $message = "Unknown Transaction!";
                return response()->json(["message" => $message], 400);
            }

            $transaction->status = $request->status;
            $transaction->save();
            $message ="Transaction status updated!";
            return response()->json(["message" => $message], 200);
        }

        public function downloadProof(Request $request){
           
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
        
            if (Auth::user()->role === 'admin' || Auth::user()->role === 'support') {
               $users = User::all();
    
                $data = [
                    'page' => 'user-management',
                    'users' => $users
                                    
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
            $user->mobile = $request->mobile;
            $user->password = Hash::make($request->password);
            $user->uuid = (string) \Str::uuid();
            $user->save();

            if ($user->save()) {
                return response()->json([
                    'message' => "Member added!",
                    'user'  => $user
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

            $validator = Validator::make($request->all(), [
                'password' => 'required|between:6,255',
                'password_confirmation' => 'required|same:password',

            ]);

            if ($validator->fails()) {
                $message = $validator->errors()->all();
                foreach ($message as $messages) {
                    return response()->json(['message' => $messages], 400);
                }
            }
            $user = User::where('id', $request->id)->first();
            if(!$user){
                return response()->json(['message' => "User not found!"],404); 
            }
            $user->name = $request->name ? $request->name : $user->name;
            $user->email = $request->email ? $request->email : $user->email;
            $user->email = $request->mobile ? $request->mobile : $user->mobile;
            $user->role = $request->role ? $request->role : $user->role;
            $user->password = Hash::make($request->password) ? Hash::make($request->password) : $user->password;
            $user->save();
            return response()->json(["message" => "Member credentials updated!"], 200);
           
        } catch (Exception $error) {
            Log::info("Admin\AdminController@updateUser error message:" . $error->getMessage());
            $response = [
                'status' =>false,
                "message" => $error
            ];
            return $response;
        }
    }


    public function deleteUser(Request $request)
    {
        try {
            $user = User::where('id', Auth::id())->first();
            // dd($user);
            if(!$user){
                return response()->json(['message' => "User not found!"],404); 
            }
            
            $user->delete();
            return response()->json(["message" => "Delete successful!"], 200);
           
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
            'name' => 'required|string',
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i|unique:users',
            'mobile' => 'nullable|unique:users|max:20|min:8',
            'password' => 'required|between:6,255',
            'confirm_password' => 'required|same:password',
            'role' => 'required|string'
        ]);
	}


}
