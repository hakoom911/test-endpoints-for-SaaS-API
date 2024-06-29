<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestingController extends Controller
{
    //
    public function postFile(Request $request){

        if($request->hasFile('file')){
        $file=Storage::disk('local')->put($request->file, 'Contents');
        $path = Storage::url($file);
            if($file){
                return response()->json('file stored successfully: '.$path,200);
            }else{
                return response()->json('fuck you ',400);
            }

        }

    }


}
