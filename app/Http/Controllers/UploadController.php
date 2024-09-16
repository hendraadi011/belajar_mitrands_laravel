<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index()
    {
        return view('upload');
    }


    public function store(Request $request)
    {
        // Memastikan bahwa file diupload
        if ($request->hasFile('mycsv')) {
            return 'yes file';
        }

        return 'Please upload file';
    }
}
