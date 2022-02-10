<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Helpers\Paths;
use FFI\Exception;
use File;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function dashboard(Request $request){
        try {
            $news = News::all();

            $data = [
                'page' => 'news',   
                'news' => $news
            ];
            return view('App.news', $data);
        } catch (Exception $error) {
            Log::info("NewsControllerr@dashboard error message:" . $error->getMessage());
            $response = [
                'status' =>false,
                "message" => $error
            ];
            return $response;
        }
    }


    public function addNews(Request $request){
        try {
            if (!$request->title || !$request->file('image') || !$request->content || !$request->category) {
                $message = "Complete field are required !";
                return response()->json(['message' => $message], 400);
            }
                
            if ($request->hasFile('slides')) {
                $imagePath = storage_path('app/' . Paths::NEWS_PATHS);
                $extension = $request->file('image')->getClientOriginalExtension();
                if (in_array(strtolower($extension), ["jpg", "png", "jpeg", "svg"])) {
                    $fileName = time() . '.' . $extension;
                    $request->file('image')->move($imagePath, $fileName);
                    $news = new News();
                    $news->user_id = Auth::id();
                    $news->title = $request->title;
                    $news->image = $fileName;
                    $news->content = $request->content;
                    $news->category = $request->category;
                    $news->save();
                    return response()->json([
                        "message" => "News added successfully!",
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
            Log::info("NewsControllerr@addNews error message:" . $error->getMessage());
            $response = [
                'status' =>false,
                "message" => $error
            ];
            return $response;
        }
    }

    public function updateNews(Request $request){
        try {
            $news = News::where('id', $request->id)->first();
            if(!$news){
                $message = "No News found !";
                return response(['message' => $message], 404)->first();
            }
            
            $news->title = $request->title ? $request->title :  $news->title;
            $news->content = $request->content ?  $request->content : $news->content;
            $news->category = $request->category ? $request->category : $news->category;
            $news->save();
            return response()->json([
              'message' => 'Updated successfully!'
            ], 200);
        } catch (Exception $error) {
            Log::info("NewsControllerr@updateNews error message:" . $error->getMessage());
            $response = [
                'status' =>false,
                "message" => $error
            ];
            return $response;
        }
    }



    public function updateThumbnail(Request $request){
        try {
            
            $news = News::where('id', $request->id)->first();
            if(!$news){
                $message = "Member not found!";
                return response()->json(['message' => $message], 404);
            }

            if (!$request->hasFile('image')) {
                $message = "An Image is required!";
                return response()->json(['message' => $message], 400);
            }

            $imageUrl = Paths::NEWS_PATHS.$news->image;
            if(Storage::has($imageUrl)){
                Storage::delete($imageUrl);
            }

            $imagePath = storage_path('app/' . Paths::NEWS_PATHS);
            $extension = $request->file('image')->getClientOriginalExtension();
            if (!in_array(strtolower($extension), ["jpg", "png", "jpeg"])) {
                $message = "Invalid file format!";
                return response()->json(['message' => $message], 400);
            }
            $fileName = time() . '.' . $extension;
            $request->file('image')->move($imagePath, $fileName);
            $news->image = $fileName;
            $news->save();
            return response()->json([
                "message" => "Thumbnail updated successfully !",
            ], 200);

        } catch (Exception $error) {
            Log::info('NewsController@updateThumbnail error message: ' . $error->getMessage());
            $message = 'Sorry, unable to create template. Please try again';
            return response()->json([
                'error' => true,
                "message" => $message,
            ], 500);
        }
    }
    public function deleteNews($id)
    {
        $news = News::where('id', $id)->first();
        if(!$news){
            $message = "No News found !";
            return response(['message' => $message], 404)->first();
        }
        $news->delete();
        if($news->delete()){
            return response()->json([
                'message' => 'Deleted successfully!'
              ], 200);
        }else{
            return response()->json([
                'message' => 'Unable to delete'
              ], 400); 
        }
    }
}



