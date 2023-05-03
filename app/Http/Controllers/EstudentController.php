<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudent;

class EstudentController extends Controller
{
    public $estudents;

    public function show()
    {
        $estudents=Estudent::all();
        return view('notas.blade', compact('estudents'));
    }
    //
}
