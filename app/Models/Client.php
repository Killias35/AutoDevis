<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    public $timestamps = true;

    protected $fillable = [
        'civilite',
        'nom_client',
        'adresse_client',
        'code_postal_client',
        'ville_client',
        'tel',
        'tva_intra',
        'rcs'
    ];

    public function chantiers()
    {
        return $this->hasMany(Chantier::class, 'id_client');
    }

    public function factures()
    {
        return $this->hasMany(Facture::class, 'id_client');
    }
}
