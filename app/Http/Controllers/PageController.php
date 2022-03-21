<?php

namespace App\Http\Controllers;
use App\Models\PageModel;
use App\Models\HomeModel;
use App\Models\SolutionsModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Helpers\Paths;
use App\Models\AboutModel;
use Facade\IgnitionContracts\Solution;
use FFI\Exception;


class PageController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }




    public function faqPage(){
       return view('Frontend.faq');
    }

    public function tabs(Request $request){
        try {
            
            $home = HomeModel::all();
            $about= AboutModel::all();
            $solutions = SolutionsModel::all();

            $data = [
                'page' => 'page',
                'subs' => '',
                'home' => $home,
                'about' => $about,
                'solutions' => $solutions
            ];
            return view('App.pages', $data);
        } catch (Exception $error) {
            Log::info('PageController@tabs error message: ' . $error->getMessage());
            $message = 'Sorry, unable to create template. Please try again';
            return response()->json([
                'error' => true,
                "message" => $message,
            ], 500);
        }
    }

    public function homePage(Request $request){
        try {
            
            if (!$request->name || $request->description) {
                $message = "Complete field are required!";
                return response()->json(['message' => $message], 400);
            }
        
            $page = new HomeModel();
            $page->id = Auth::id();
            $page->name = $request->name;
            $page->description = $request->description;
            $page->save();
            return response()->json(["message" => "Page created successfully !"], 200);
        } catch (Exception $error) {
            Log::info('PageController@homePage error message: ' . $error->getMessage());
            $message = 'Sorry, unable to create template. Please try again';
            return response()->json([
                'error' => true,
                "message" => $message,
            ], 500);
        }
    }

    public function createSolution(Request $request){
        try {
            if (!$request->name || !$request->file('slides') || !$request->description) {
                $message = "Complete field are required !";
                return response()->json(['message' => $message], 400);
            }
                
            if ($request->hasFile('slides')) {
                $imagePath = storage_path('app/' .  Paths::SOLUTIONS_PATHS);
                $extension = $request->file('slides')->getClientOriginalExtension();
                if (in_array(strtolower($extension), ["jpg", "png", "jpeg", "svg"])) {
                    $fileName = time() . '.' . $extension;
                    $request->file('slides')->move($imagePath, $fileName);
                    $solutions = new SolutionsModel();
                    $solutions->user_id = Auth::id();
                    $solutions->name = $request->name;
                    $solutions->slides = $fileName;
                    $solutions->description = $request->description;
                    $solutions->save();;
                    return response()->json([
                        "status" => "success",
                        "message" => "Solutions created successfully!",
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
            Log::info('PortfolioController@createSolution error message: ' . $error->getMessage());
            return response()->json([
                'error' => true,
                "message" => $error,
            ], 500);
        }


    }


    public function aboutPage(Request $request){
        try {

            if (!$request->name || !$request->file('slides') || $request->description) {
                $message = "Complete field are required !";
                return response()->json(['message' => $message], 400);
            }
                
            if ($request->hasFile('slides')) {
                $imagePath = storage_path('app/' . Paths::ABOUT_PATHS);
                $extension = $request->file('slides')->getClientOriginalExtension();
                if (in_array(strtolower($extension), ["jpg", "png", "jpeg"])) {
                    $fileName = time() . '.' . $extension;
                    $request->file('slides')->move($imagePath, $fileName);
                    $page = new AboutModel();
                    $page->id = Auth::id();
                    $page->name = $request->name;
                    $page->slides = $fileName;
                    $page->sdescription = $request->description;
                    $page->save();
                    return response()->json(["message" => "Page created successfully !"], 200);

                }else{
                    $message = "Invalid file format!";
                    return response()->json(['message' => $message], 400);
                }
               
            }else{
                $message = "Request has no file";
                return response()->json(['message' => $message], 400);
            }
        } catch (Exception $error) {
            Log::info('PageController@solutionsPage error message: ' . $error->getMessage());
            $message = 'Sorry, unable to create template. Please try again';
            return response()->json([
                'error' => true,
                "message" => $message,
            ], 500);
        }
    }

   
}
