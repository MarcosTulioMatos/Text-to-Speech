<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AudioController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function convert(Request $request)
    {
        $request->validate([
            'text' => 'required|string|min:1|max:1000'
        ]);

        $text = $request->text;
        
        $apiKey = '8885c1a9a5b0425887004a263ec54883';
        $audioUrl = "http://api.voicerss.org/?key={$apiKey}&hl=pt-br&src=" . urlencode($text);
        
        return view('home', [
            'text' => $text,
            'audioUrl' => $audioUrl,
        ]);
    }
}