<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chantier;

class ChantiersController extends Controller
{
    public function index()
    {
        $chantiers = Chantier::all();
        return view('chantiers.index', compact('chantiers'));
    }
}
