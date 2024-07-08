<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function uploadImage(Request $request){
        $fileName = time().'-'.$_FILES['file']['name'];
        $request -> file('file')-> storeAs('public/images',$fileName);
        $url = '/storage/images/'.$fileName;
        return response() -> json([
            'success' => true,
            'path' => $url
        ]);
    }
    public function uploadImages(Request $request){
        // $request->validate([
        //     'files.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        // ]);
        // $url = [];
        // foreach ($request->file('files') as $files) {
        //     $fileName = time() . '-' . $files->getClientOriginalName();
        //     $files->storeAs('public/images', $fileName); // Store in storage/app/public/images
        //     $url[] = asset('storage/images/' . $fileName);
        // }
        $request->validate([            
            'files.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);
            $files = $request -> file('files');
        for ($i=0; $i < count($files) ; $i++) { 
            $fileName =time().'-'.$files[$i]->getClientOriginalName();
            $files[$i] -> storeAs('/public/images',$fileName);
            $url[] = '/storage/images/'.$fileName;
        }
        return response() -> json([
        'success' => true,
        'paths' => $url
        ]);
       
    }
}