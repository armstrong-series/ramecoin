<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Helpers\Paths;
use App\Models\AboutModel;
use App\Models\PageModel;
use App\Models\PortfolioModel;
use App\Models\SolutionsModel;
use App\Models\TeamModel;
use FFI\Exception;
class PageController extends Controller
{



    public function home(Request $request){
        try {
            // $home = PageModel::where(['user_id'=> Auth::id()])->get();
            $portfolios = PortfolioModel::where('id', Auth::id())->get();
            $data = [
                'page' => 'home',
                // 'home' => $home,
                'portfolios' => $portfolios
            ];

            return view('Frontend.index', $data);

        } catch (Exception $error) {
             Log::info('Pages\PageController@home error message: ' . $error->getMessage());
             $message = 'Sorry, unable to create template. Please try again';
            return response()->json([
                'error' => true,
                "message" => $message,
            ], 500);
        }
    }


    public function about(Request $request){
        try {
           
            // $home = PageModel::where(['user_id'=> Auth::id()])->get();
            $data = [
                'page' => 'about',
                // 'home' => $home
                
            ];

            return view('Frontend.about', $data);

        } catch (Exception $error) {
             Log::info('Pages\PageController@about error message: ' . $error->getMessage());
             $message = 'Sorry, unable to create template. Please try again';
            return response()->json([
                'error' => true,
                "message" => $message,
            ], 500);
        }
    }



    public function solutions(Request $request){
        try {
            $solutions = SolutionsModel::all();
            $data = [
                'page' => 'solutions',
                'solutions' =>  $solutions 
            ];

            return view('Frontend.solutions', $data);

        } catch (Exception $error) {
             Log::info('Pages\PageController@solutions error message: ' . $error->getMessage());
             $message = 'Sorry, unable to create template. Please try again';
            return response()->json([
                'error' => true,
                "message" => $message,
            ], 500);
        }
    }

    public function team(Request $request){
        try {
            $teams = TeamModel::all();
            $data = [
                'page' => 'team',
                'teams' => $teams
                
            ];

            return view('Frontend.team', $data);

        } catch (Exception $error) {
             Log::info('Pages\PageController@team error message: ' . $error->getMessage());
             $message = 'Sorry, unable to create template. Please try again';
            return response()->json([
                'error' => true,
                "message" => $message,
            ], 500);
        }
    }

    public function portfolio(Request $request){
        try {
            $portfolios = PortfolioModel::all();
            $data = [
                'page' => 'portfolio',
                'portfolios' => $portfolios
            ];

            return view('Frontend.portfolio', $data);

        } catch (Exception $error) {
             Log::info('Pages\PageController@portfolio error message: ' . $error->getMessage());
             $message = 'Sorry, unable to create template. Please try again';
            return response()->json([
                'error' => true,
                "message" => $message,
            ], 500);
        }
    }

    public function contact(Request $request){
        try {
            // $home = PageModel::where(['user_id'=> Auth::id()])->get();
            $data = [
                'page' => 'contact',
                // 'home' => $home
            ];

            return view('Frontend.contact', $data);

        } catch (Exception $error) {
             Log::info('Pages\PageController@contact error message: ' . $error->getMessage());
             $message = 'Sorry, unable to create template. Please try again';
            return response()->json([
                'error' => true,
                "message" => $message,
            ], 500);
        }
    }

    
}
