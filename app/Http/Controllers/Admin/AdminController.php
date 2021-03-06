<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CoinModel;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\WalletModel;
use App\Helpers\Paths;
use Exception;
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
                $totalUsers = User::all();
                $deposits = WalletModel::where('status', 'success')->get();
                $totalDeposits = count($deposits);
                $usersCount = count($totalUsers);
                $admin = User::where('role', 'admin')->get();
                $support = User::where('role', 'support')->get();
                $currentUser = Auth::user();

                $data = [
                    'page' => 'admin',
                    'admin' => $admin,
                    'support' => $support,
                    "totalDeposits" => $totalDeposits,
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




    public function increaseInvestment(Request $request)
    {
        try{
            
            if(!$request->perecentageChange){
                $message = "You need a percentage value";
                return response()->json(["message" => $message], 400);
            }
            $wallet = WalletModel::where('id', $request->id)->first();
            if(!$wallet){
                $message = "Unknown transaction!";
                return response()->json(["message" => $message], 404);
            }
            $request->perecentageChange = $request->perecentageChange;
            $percent = 100;
            $change  = ($request->perecentageChange / 100) * $wallet->amount;
        
            $increment = $change + $wallet->amount;
             $wallet->amount = $increment;
            $wallet->increment = $request->perecentageChange;
            $wallet->save();
            $message = "Investment updated!";

            return response(["message" => $message, "wallet" => $wallet], 200);

        }catch(Exception $errorMessage){
            Log::info($errorMessage->getMessage());
        }
    }

     public function transactionHistory(Request $request){
        try {
            
            if (Auth::user()->role === 'admin' || Auth::user()->role === 'support') {
                $transactions = WalletModel::all();
                
                $data = [
                    'page' => 'admin-transaction',
                    'transactions' =>  $transactions
                ];
                return view('Admin.transactions', $data);
             } else {
                return redirect()->back();
             }
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
                return response()->json(["message" => $message], 404);
            }
            $transaction->status = $request->status;
            $transaction->save();
            $message ="Transaction status updated!";
            return response()->json(["message" => $message, "transaction" => $transaction], 200);
        }


        public function downloadPayment($file){

            $file_path = storage_path('app/' . Paths::PAYMENT_PATHS . $file);
            $header = ['Content-Type' => 'image/*'];
    
            return response()->download($file_path, $file, $header);
        }

    public function deleteTransaction(Request $request){
        try {
            $transaction = WalletModel::where('id', $request->id)->first();
            if(!$transaction){
                $message = "Unknown Transaction!";
                return response()->json(["message" => $message], 404);
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



    public function addCoin(Request $request){
        try {
            
            if(!$request->name || !$request->address){
                $message = "Complete both fields!";
                return response()->json(["message" => $message],400);
            }
            $coin = new CoinModel();
            $coin->user_id = Auth::id();
            $coin->name = $request->name;
            $coin->address = $request->address;
            $coin->save();
            $message = "Request completed";
            return response()->json(["message" => $message], 200);
        } catch (Exception $errorMessage) {
           Log::info($errorMessage->getMessage());
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
            $message = "Member added!";
            return response()->json(["message" => $message, "user" => $user], 200);

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
        try 
          {
            $user = User::where('id', $request->id)->first();
            if(!$user){
                return response()->json(['message' => "User not found!"],404); 
            }
            $user->name = $request->name ? $request->name : $user->name;
            $user->mobile = $request->mobile ? $request->mobile : $user->mobile;
            $user->email = $request->email ? $request->email : $user->email;
            $user->role = $request->role ? $request->role : $user->role;
            $user->save();
            $message = "Member credentials updated!";
            return response()->json(["message" =>$message, "user" => $user], 200);
           
        } catch (Exception $error) {
            Log::info("Admin\AdminController@updateUser error message:" . $error->getMessage());
            $response = [
                'status' =>false,
                "message" => $error
            ];
            return $response;
        }
    }
    

    public function changeSecret(Request $request){
        try {


            if(empty($request->all())){
                $message = "Ensure both fields are complete";
                return response()->json(['message' => $message], 400);
            }

            $validator = Validator::make($request->all(), [
                'password' => 'required|between:6,255',
                'confirm_password' => 'required|same:password',  ]);

          
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
            $user->password = Hash::make($request->password) ? Hash::make($request->password) : $user->password;
            $user->save();
            return response()->json(["message" => "Password Updated!", "user" => $user], 200);
        } catch (Exception $error) {
            Log::info("Admin\AdminController@changeSecret error message:" . $error->getMessage());
            $response = [
                'status' =>false,
                "message" => $error
            ];
            return $response;
        }
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
