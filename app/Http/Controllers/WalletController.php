<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WalletModel;
use Exception, Log, Auth;
use App\Helpers\Paths;
use Carbon\Carbon;

class WalletController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }



    public function fundPayment(Request $request){
        try {
            

            $wallet = WalletModel::where('user_id', Auth::id())->get();
       
            $data = [
                'page' => 'wallet-fund',
                'wallet' => $wallet,
                
            ];
            return view('App.walletfunding', $data);

        } catch (Exception $error) {
            Log::info('WalletController@fundPayment error message' . $error->getMessage());
            $message = 'Unable to get Resource';
            return  $message;
        }
    }

    public function transactions(Request $request){
        try {
            if (Auth::user()->role === 'member') {
                $transactions = WalletModel::where('user_id', Auth::id())->get();
                $data = [
                    'page' => 'transactions',
                    'transactions' => $transactions
                ];
                 return view('App.transactions', $data);
                 
             } else {
                return redirect()->back();
             }
        } catch (Exception $error) {
            Log::info('WalletController@transactions error message' . $error->getMessage());
            $message = 'Unable to get Resource';
            return $error;
        }
    }

    public function makeDeposit(Request $request){
        try {

            if(!$request->amount || !$request->payment){
                $message = "Add an amount with payment method!";
                return response()->json(["message" => $message],400);
            }
            if ($request->hasFile('proof')) {
                $filePath = storage_path('app/' . Paths::PAYMENT_PATHS);
                $extension = $request->file('proof')->getClientOriginalExtension();
                if (in_array(strtolower($extension), ["jpg", "png", "jpeg"])) {
                    $fileName = time() .'payment-proof'. '.' . $extension;
                    $request->file('proof')->move($filePath, $fileName);
                    $payment = new WalletModel();
                    $payment->user_id = Auth::id();
                    $payment->amount = $request->amount;
                    $payment->type = "credit";
                    $payment->status = "pending";
                    $payment->payment = $request->payment;
                    $payment->txn_id = \Str::uuid();
                    $payment->txn_date = Carbon::now();
                    $payment->file = $fileName;
                    // dd($payment);
                    $payment->save();
                    $message = "Request Completed!";
                    return response()->json(["message" => $message], 200);

                }else {
                    $message = "Invalid file format";
                    return response()->json(['message' => $message], 400);
                }
            }else {
                $message = "Request has no file";
                return response()->json(['message' => $message], 400);
            }
               
        } catch (Exception $error) {
            Log::info('WalletController@makeDeposit error message' . $error->getMessage());
            $message = 'Unable to get Resource';
            return $error;
        }
    }
}
