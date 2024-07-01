<?php

namespace App\Http\Controllers;

use App\Models\laguModel;
use App\Models\lirikModel;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    // public function addMusic(Request $request)
    // {
    //     $lagu = laguModel::create([
    //         'artis'=> $request->artis,
    //         'judul'=> $request->judul,
    //         'genre'=> $request->genre,
    //         'durasi'=> $request->durasi
    //     ]);

    //     lirikModel::create([
    //         'lirik'=> $request->lirik,
    //         'id_lagu'=> $lagu->id_lagu
    //     ]);

    //     return response()->json(['message' => 'Music and Lyrics added successfully']);
    // }

    // public function index()
    // {
    //     $lagu = laguModel::with(['artis', 'judul', 'durasi', 'lirik'])->get();
    //     return view('layout.home', compact('lagu'));
    // }
}
