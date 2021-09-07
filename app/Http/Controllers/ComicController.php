<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function comics() {
        $data = [
            'comics'=> config('comics')
        ];
        return view('comics',$data);
    }

    public function dettaglio($id) {
        $comic = config('comics');
        $data = [
            'risultato' => $comic[$id]
        ];
        return view('dettaglio', $data);
    }
}
