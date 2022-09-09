<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    public function Categorie()
    {
       
        return  $this->belongsTo(Categorie::class , 'categorie_id');
    }
    public function commanande()
    {
        return  $this->belongsToMany(Commande::class, 'commande-produit'); 
    }
}
