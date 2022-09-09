<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande_produit extends Model
{
    use HasFactory;
    public function Produits()
    {
        return $this->belongsToMany(Produit::class );
    }
}
