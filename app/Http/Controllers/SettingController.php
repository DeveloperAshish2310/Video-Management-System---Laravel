<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SettingController extends Controller
{
    public function index(Request $request) {
        return view('panel.settings.settings');
    }
    
    function update(Request $request){
        
        try {    
            
            $request['meta_keyword'] = implode(', ', array_column(json_decode($request->meta_keyword), 'value'));
            
            foreach ($request->all() as $key => $value) {
                if ($value != null) {
                    $chk = getConfig($key);
                    if ($chk != null) {
                        $chk->value = $value;
                        $chk->save();
                    }
                }
            }
            return back()->with('success','Records are Updated Success Fully!!');
        } catch (\Throwable $th) {
            throw $th;  
            return back()->with("error","Error While Updating $th !!");
        }
        
    }
    
    
    function videohost(Request $request){

        $api = getConfig('video_api')->value;
        $url = "https://api.streamwish.com/api/folder/list?key=$api";
        $response = Http::get($url);

        $response = json_decode($response->body(),true);

        $folders = $response['result']['folders'];       
        
        return view('panel.settings.video-host',compact('folders'));
    }

    function videohostUpdate(Request $request){

        if ($request->has('create_folder')) {
            $foldername = $request->get('newfolder');
            $api = getConfig('video_api')->value;
            $url = "https://api.streamwish.com/api/folder/create";
            $response = Http::get($url,[
                'key' => "$api",
                'name' => "$foldername"
            ]);
            $response = json_decode($response->body(),true);

            if ($response['status'] == 200) {
                return back()->with('success',"Folder Created!!");
            }else{
                return back()->with('error',"There was an Error while creating !!");
            }
        }
        
        if ($request->has('update_api')) {
            $api_key = $request->get('video_api');
            $data = getConfig('video_api');
            $data->value = $api_key;
            $data->save();
            return back()->with('success',"Folder Created!!");
        }
        
        return back()->with('error',"Invalid Request");
    }
    


    function setdefault($fid,$action){

        try {
            switch ($action) {
                case 'sync':
                    $record = getConfig('video_folder_sync_id');
                    $record->value = $fid;
                    $record->save();
                    break;
                case '2part':
                    $record = getConfig('video_folder_2part_id');
                    $record->value = $fid;
                    $record->save();
                    break;
                case 'move':
                    $record = getConfig('video_folder_move_id');
                    $record->value = $fid;
                    $record->save();
                    break;  
                default:
                    return back()->with('error',"Invailed Action");
                    break;
            }
    
            return back()->with('success',"updated SuccessFully");
    
        } catch (\Throwable $th) {
            throw $th;
        }
    
        
    }
    
}
