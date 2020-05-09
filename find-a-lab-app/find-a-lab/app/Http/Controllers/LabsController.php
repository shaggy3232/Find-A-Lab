<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Labs;

class LabsController extends Controller
{
    public function index()
    {
        $labs = Labs::all()->toArray();
        return view('Labs', compact('labs'));
    }
    public function show (Labs $lab)
    {
        return $lab;
    }
    public function store (Request $request)
    {
        $lab = Labs::create($request->all());
        return redirect ('/home');
    
    }
    public function update(Request $request, Labs $lab)
    {
        $lab -> update($request -> all());
        return response() -> json($lab, 200);

    }

    public function delete(Labs $lab)
    {
        $lab->delete();
        return response() -> json(null,204);
    }
}
