<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function upload(Request $req){
        $request = $req->file('file')->store('public/upload'); 
        
        return [
            'result' => $request 
        ];
    }
}
