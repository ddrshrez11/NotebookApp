<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notebook; 
class NotebooksController extends Controller
{
    public function index()
    {
        //return view('notebooks/index');
        $notebooks=Notebook::all();
        return view('notebooks.index', compact('notebooks'));
    }
    public function create()
    {
        return view('notebooks.create');
    }
    public function store(Request $request){
        return $request->all();
    }
}
