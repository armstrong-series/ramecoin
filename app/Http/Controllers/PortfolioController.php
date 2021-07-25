<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PortfolioModel;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Helpers\Paths;
use FFI\Exception;


class PortfolioController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function dashboard(){
        try {
            $dashboard = PortfolioModel::where('user_id', Auth::id())->get();

            $data = [
                'page' => 'portfolio',
                'sub' => 'portfolio'
            ];
            return view('App.portfolio', $data);
        } catch (Exception $error) {
            Log::info("PortfolioController@dashboard error message:" . $error->getMessage());
            $response = [
                'status' =>false,
                "message" => $error
            ];
            return $response;
        }
    }



    public function createPortfolio(Request $request)
    {
        try {
            if (!$request->name || !$request->file('slides') || $request->descriptiom) {
                $message = "Complete field are required !";
                return response()->json(['message' => $message], 400);
            }
                
            if ($request->hasFile('slides')) {
                $imagePath = storage_path('app/' . Paths::PORTFOLIO_PATHS);
                $extension = $request->file('slides')->getClientOriginalExtension();
                if (in_array(strtolower($extension), ["jpg", "png", "jpeg"])) {
                    $fileName = time() . '.' . $extension;
                    $request->file('photo_url')->move($imagePath, $fileName);
                    $portfolio = new PortfolioModel;
                    $portfolio->id = Auth::id();
                    $portfolio->name = $request->name;
                    $portfolio->slides = $fileName;
                    $portfolio->sdescription = $request->description;
                    $portfolio->save();
                    return response()->json([
                        "status" => "success",
                        "message" => "Portfolio created successfully !",
                    ], 200);

                }else{
                    $message = "Invalid file format!";
                    return response()->json(['message' => $message], 400);
                }
               
            }else{
                $message = "Request has no file";
                return response()->json(['message' => $message], 400);
            }
       

        } catch (Exception $error) {
            Log::info('Admin\AdminController@adminCreateTemplates error message: ' . $error->getMessage());
            $message = 'Sorry, unable to create template. Please try again';
            return response()->json([
                'error' => true,
                "message" => $message,
            ], 500);
        }
    }



}

