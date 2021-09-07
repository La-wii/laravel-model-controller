<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    public function comics() {
        $data = [
            'comics'=> config('comics')
        ];
        return view('comics',$data);
    }

    public function dettaglio($id) {
        $comic = Comic::all();
        $data = [
            'risultato' => $comic[$id]
        ];
        return view('dettaglio', $data);
    }
}
