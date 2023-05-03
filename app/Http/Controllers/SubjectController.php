<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    public $asignaturs;

    public function show()
    {
        $asignaturs=Subject::all();
        return view('notas.blade', compact('asignaturs'));
    }
}
