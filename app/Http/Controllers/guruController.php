<?php

namespace App\Http\Controllers;

use App\Models\guru;
use Illuminate\Http\Request;

class guruController extends Controller
{
    public function index()
    {
        $guru = guru::all();
        return view('create', ['guru' => $guru]);
    }

    public function create(Request $request)
    {
        guru::create($request->except('_token', 'submit'));
        return redirect('/guru');
    }
}
