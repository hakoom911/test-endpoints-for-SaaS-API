<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestingController extends Controller
{
    //
    public function postFile(Request $request)
    {
        // return response()->json('yes',200);


        if ($request->file && $request->hasFile('file')) {
            $file = Storage::put('public', $request->file);
            $path = Storage::url($file);
            if ($file) {
                return response()->json(
                    [
                        'msg' => 'file stored successfully',
                        'filePath' => asset($path)
                    ],
                    200
                );
            } else {
                return response()->json(['msg'=>'fuck of '], 400);
            }
        }else{
            return response()->json(['msg'=>'fuck of '], 400);

        }


    }


    public function putFileMethod(Request $request)
    {

        if ($request->file && $request->hasFile('file')) {
            $file = Storage::put('public', $request->file);
            $path = Storage::url($file);
            if ($file) {
                return response()->json('file stored successfully: ' . $path, 200);
            } else {
                return response()->json('fuck you ', 400);
            }
        }
        return response()->json('yes');
    }
}
