<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteContoller extends Controller
{
    public $notes;

    public function show()
    {
        $notes=Note::all();
        return view('notas.blade', compact('notes'));
    }
}
