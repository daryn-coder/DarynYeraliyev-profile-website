<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upload;

class FormController extends Controller
{
    //
    public function uploadform() {
        return view('Form.upload');
    }
    public function uploadsubmit(Request $request) {

        
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'photos' => 'required|mimes:jpg,png,jpeg,gif|max:5048'
        ]);
        
        $newImageName = time() . '-' . $request->name . '.' . $request->photos->extension();
        
        $request->photos->move(public_path('uploads'), $newImageName);


        
 
        Upload::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'image' => $newImageName
        ]);

        return redirect('/form/upload');

    }
}
