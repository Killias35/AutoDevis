<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reglement extends Model
{
    protected $table = 'reglements';
    public $timestamps = true;

    protected $fillable = [
        'id_facture',
        'date_reglement',
        'montant_regle'
    ];

    public function facture()
    {
        return $this->belongsTo(Facture::class, 'id_facture');
    }
}
