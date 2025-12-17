<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chantier extends Model
{
    protected $table = 'chantiers';
    public $timestamps = true;

    protected $fillable = [
        'id_client',
        'nom_chantier',
        'adresse_chantier',
        'code_postal_chantier',
        'ville_chantier',
        'conducteur'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'id_client');
    }

    public function factures()
    {
        return $this->hasMany(Facture::class, 'id_chantier');
    }
}
