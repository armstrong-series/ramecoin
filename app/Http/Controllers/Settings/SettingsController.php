<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Models\PageModel;
use App\Models\Settings;
use App\Helpers\Paths;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(Request $request)
    {
        try {

           
            $data = [
                'page' => 'settings',
                'sub' => '',

            ];
            return view('Settings.dashboard', $data);

        } catch (Exception $error) {
            Log::info("Settings\SettingsController@dashboard error message:" . $error->getMessage());
            $response = [
                'status' => false,
                "message" => $error,
            ];
            return $response;
        }
    }

    public function profile(Request $request)
    {
        try {
            $settings = PageModel::where(['user_id', Auth::id()])->get();
            $data = [
                'page' => 'profile',
                'sub' => '',
                'settings' => $settings,
            ];
        } catch (Exception $error) {
            Log::info("Settings\SettingsController@profile error message:" . $error->getMessage());
            $response = [
                'status' => false,
                "message" => $error,
            ];
            return $response;
        }
    }




    public function updateThumbnail(Request $request){
        try {
            
            $user = User::where('id', $request->id)->first();
            if(!$user){
                $message = "Profile not found!";
                return response()->json(['message' => $message], 404);
            }

            if (!$request->hasFile('profile_pics')) {
                $message = "An Image is required to complete request!";
                return response()->json(['message' => $message], 400);
            }

            $imageUrl = Paths::TEAM_PATHS . $user->profile_pics;
            if(Storage::has($imageUrl)){
                Storage::delete($imageUrl);
            }

            $imagePath = storage_path('app/' . Paths::TEAM_PATHS);
            $extension = $request->file('slides')->getClientOriginalExtension();
            if (!in_array(strtolower($extension), ["jpg", "png", "jpeg"])) {
                $message = "Invalid file format!";
                return response()->json(['message' => $message], 400);
            }
            $fileName = time() . '.' . $extension;
            $request->file('profile_pics')->move($imagePath, $fileName);
            $user->slides = $fileName;
            $user->save();
            return response()->json([
                "message" => "Profile updated successfully!",
            ], 200);

        } catch (Exception $error) {
            Log::info('Settings\Settings@updateThumbnail error message: ' . $error->getMessage());
            $message = 'Sorry, unable to create template. Please try again';
            return response()->json([
                'error' => true,
                "message" => $message,
            ], 500);
        }
    }


    public function security(){

        $data = [
            'page' => 'security'
        ];
        return view('Settings.security', $data);
    }



    public function updateUserDetails(Request $request){
        try {
          
            $validator = Validator::make($request->password, [
                'password' => 'between:6,255',
                'confirm_password' => 'same:password',

            ]);
            if ($validator->fails()) {
                $message = $validator->errors()->all();
                foreach ($message as $messages) {
                    return response()->json(['message' => $messages], 400);
                }
            }
            $user = User::where('id', $request->id)->first();
            if(!$user){
                $message = "Unknown User!";
                return response()->json(["message" => $message], 404);
                $user->name = $request->name;
                $user->mobile = $request->mobile;
                $user->password = Hash::make($request->password);
                $user->save();
                $message = "Details Updated!";
                return response()->json(["message" => $message, "user" => $user], 200);
            }
        } catch (Exception $error) {
            Log::info('Settings\Settings@updateUserDetails error message: ' . $error->getMessage());
            $message = 'Sorry, unable to create template. Please try again';
            return response()->json([
                'error' => true,
                "message" => $message,
            ], 500);
        }
    }
}
