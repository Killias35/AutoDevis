<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reglement;

class ReglementsController extends Controller
{
    public function index()
    {
        $reglements = Reglement::all();
        return view('reglements.index', compact('reglements'));
    }
}
