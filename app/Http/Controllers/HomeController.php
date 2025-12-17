<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facture;
use App\Models\Client;
use App\Models\Chantier;
use App\Models\Reglement;

class HomeController extends Controller
{
    public function index() {
        $clientsCount = Client::count();
        $chantiersCount = Chantier::count();
        $facturesCount = Facture::count();
        $reglementsCount = Reglement::count();

        return view('home' , compact('clientsCount', 'chantiersCount', 'facturesCount', 'reglementsCount'));
    }
}
