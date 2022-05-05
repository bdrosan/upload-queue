<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImportController extends Controller
{
    public function store(Request $request)
    {
        $image = $request->file('file');

        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('files'), $imageName);

        return redirect('/');
    }
}
