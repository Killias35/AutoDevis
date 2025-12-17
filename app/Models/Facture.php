<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    protected $table = 'factures';
    public $timestamps = true;

    protected $fillable = [
        'id_client',
        'id_chantier',
        'numero_situation',
        'pv_numero',
        'date_facture',
        'sous_total',
        'montant_facture',
        'echeance',
        'affacturage'
    ];

    public function chantier()
    {
        return $this->belongsTo(Chantier::class, 'id_chantier');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'id_client');
    }

    public function reglements()
    {
        return $this->hasMany(Reglement::class, 'id_facture');
    }

}
