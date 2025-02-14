<?php

namespace App\Http\Controllers;

use App\Models\Juri;
use Illuminate\Http\Request;

class JuriController extends Controller
{
    public function index()
    {
        $juris = Juri::all();
        return view('pages.juri', compact('juris'));
    }

    public function home()
    {
        $juris = Juri::all();
        return view('pages.home', compact('juris'));
    }
}
