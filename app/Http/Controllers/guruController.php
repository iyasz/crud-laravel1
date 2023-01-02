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

    public function delete($id)
    {
        $find = guru::find($id);
        $find->delete();
        return redirect('/guru');
    }

    public function updateview($id)
    {
        $find = guru::find($id);
        return view('update', ['guru' => $find]);
    }

    public function update($id, Request $request)
    {
        $find = guru::find($id);
        $find->update($request->except('_token', 'submit'));
        return redirect('/guru');
    }
}
