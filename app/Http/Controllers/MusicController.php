<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class MusicController extends Controller
{
    public function index()
    {
        $songs = Song::all();
        return view('buscador', compact('songs'));
    }

    public function buscador(Request $request)
    {
        $searchInput = $request->get('name');
        $songs = Song::where('nombre', 'like', '%' . $searchInput . '%')->get();

        if ($songs->isEmpty()) {
            $request->session()->put('none', true);
        } else {
            $request->session()->put('search', true);
        }

        return view('buscador', compact('songs'));
    }

}
