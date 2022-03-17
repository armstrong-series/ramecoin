<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Helpers\Paths;
use Exception;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use File;

class ProfileController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }


    public function userProfile(Request $request){
        try {
            
            $data = [
                'page' => 'settings',
                'sub' => '',

            ];
            return view('Settings.dashboard', $data);

        } catch (Exception $error) {
           Log::info("userProfile error Message:". $error->getMessage());
        }
    }


    public function updateUsersProfile(Request $request){
        try {
           $user = User::where('id', $request->id)->first();
           if(!$user){
               $message =  "Unknown User!";
               return response()->json(["messsage" => $message], 404);
           }

           $user->name = ($request->name) ? $request->name : $user->name;
           $user->mobile = ($request->mobile) ? $request->mobile : $user->mobile;
           $user->save();
           $message = "Record Updated";
           return response()->json(["messsage" => $message], 404);
        } catch (Exception $error) {
            Log::info("userProfile error Message:". $error->getMessage());

        }
    }

    public function changeProfileImage(Request $request){
        try {
            $user = User::where('id', Auth::id())->first();
            if(!$user){
                $message = "Unknown user!";
                return response()->json(["messsage" => $message], 404);

                $response = $this->storeImage($request);
                if ($response["status"] != true) {
                    return response()->json([
                        'error' => true,
                        'errors' => [],
                        'status_code' => 503,
                        "message" => "Unable to store image, please try again later.",
                    ], 503);
                }
                if ($response["status"] != true) {
                    return response()->json([
                        'error' => true,
                        'errors' => [],
                        'status_code' => 503,
                        "message" => "Unable to store image, please try again later.",
                    ], 503);
                }
            }
        } catch (Exception $error) {
            Log::info("userProfile error Message:". $error->getMessage());
        }
    }


    private function storeImage($request) {
		try {
			if ($request->hasfile('profile_pics')) {
				$image = $request->file('profile_pics');
				$fileName = str_replace(' ', '_', $image->getClientOriginalName());
				$documentPath = Paths::PROFILE_IMAGE_PATH . $fileName;
				Storage::put($documentPath, File::get($image));
				return [
					'status' => true,
					'image' => $fileName,
				];
			}
		} catch (Exception $error) {
			Log::info($error->getMessage());
		}
	}
}
