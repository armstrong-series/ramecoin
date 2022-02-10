<?php

namespace App\Http\Controllers;
use App\Models\TeamModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Helpers\Paths;
use FFI\Exception;
use File;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Storage;


class TeamController extends Controller
{
    




    public function teams(Request $request){
        try {
            $teams = TeamModel::all();

            $data = [
                'page' => 'team-member',
                'teams' => $teams
            ];
            return view('App.team', $data);
        } catch (Exception $error) {
            Log::info("TeamController@dashboard error message:" . $error->getMessage());
            $response = [
                'status' =>false,
                "message" => $error
            ];
            return $response;
        }
    }


    public function createTeamMember(Request $request)
    {
        try {
            if (!$request->name || !$request->file('profile') || !$request->email) {
                $message = "Name, Email and Profile fields are required !";
                return response()->json(['message' => $message], 400);
            }
                
            if ($request->hasFile('profile')) {
                $imagePath = storage_path('app/' . Paths::TEAM_PATHS);
                $extension = $request->file('profile')->getClientOriginalExtension();
                if (in_array(strtolower($extension), ["jpg", "png", "jpeg"])) {
                    $fileName = time() . '.' . $extension;
                    $request->file('profile')->move($imagePath, $fileName);
                    $team = new TeamModel();
                    $team->user_id = Auth::id();
                    $team->name = $request->name;
                    $team->email = $request->email;
                    $team->profile = $fileName;
                    $team->designation = $request->designation;
                    $team->biography = $request->biography;
                    $team->save();
                    return response()->json([
                        "status" => "success",
                        "message" => "Member added sucessfully!",
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
            Log::info('TeamController@createTeamMember error message: ' . $error->getMessage());
            return response()->json([
                'error' => true,
                "message" => $error,
            ], 500);
        }
    }


    public function updateTeamMember(Request $request){
        try {
            $team = TeamModel::where('id', $request->id)->first();
            if(!$team){
                $message = "team member not found!";
                return response()->json(['message' => $message], 404);
            }
            $team->name = $request->name ? $request->name : $team->name;
            $team->email = $request->email ? $request->email : $team->email;
            $team->desgnation = $request->desgnation ? $request->desgnation : $team->desgnation;
            $team->biography = $request->biography ? $request->biography : $team->biography;
            $team->save();
            return response()->json(["message" => "Updated Successfully!"], 200);
           
        } catch (Exception $error) {
            Log::info('TeamController@updateTeamMember error message: ' . $error->getMessage());
            $message = 'Sorry, unable to create template. Please try again';
            return response()->json([
                'error' => true,
                "message" => $error
            ], 500);
        }
    }

    public function deleteMember($id){
        try {
           $team = TeamModel::where('id', $id)->first();
           if(!$team){
               return response()->json([
                  "message" => "Member not found!"], 404);
           }
           $imageUrl = Paths::TEAM_PATHS.$team->profile;
           if(Storage::has($imageUrl)){
               Storage::delete($imageUrl);
           }
           $team->delete();
           return response()->json([
            "message" => "Member deleted!",
        ], 200);
        } catch (Exception $error) {
            Log::info('TeamController@deleteMember error message: ' . $error->getMessage());
            $message = 'Sorry, unable to create template. Please try again';
            return response()->json([
                'error' => true,
                "message" => $message,
            ], 500);
        }
    }




    public function updateThumbnail(Request $request){
        try {
            
            $team = TeamModel::where('id', $request->id)->first();
            if(!$team){
                $message = "Member not found!";
                return response()->json(['message' => $message], 404);
            }

            if (!$request->hasFile('profile')) {
                $message = "An Image is required!";
                return response()->json(['message' => $message], 400);
            }

            $imageUrl = Paths::TEAM_PATHS.$team->profile;
            if(Storage::has($imageUrl)){
                Storage::delete($imageUrl);
            }

            $imagePath = storage_path('app/' . Paths::TEAM_PATHS);
            $extension = $request->file('profile')->getClientOriginalExtension();
            if (!in_array(strtolower($extension), ["jpg", "png", "jpeg"])) {
                $message = "Invalid file format!";
                return response()->json(['message' => $message], 400);
            }
            $fileName = time() . '.' . $extension;
            $request->file('profile')->move($imagePath, $fileName);
            $team->image = $fileName;
            $team->save();
            return response()->json([
                "message" => "Thumbnail updated successfully !",
            ], 200);

        } catch (Exception $error) {
            Log::info('TeamController@updateThumbnail error message: ' . $error->getMessage());
            $message = 'Sorry, unable to create template. Please try again';
            return response()->json([
                'error' => true,
                "message" => $message,
            ], 500);
        }
    }

}
