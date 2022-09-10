<?php

namespace App\Http\Controllers;

use App\Models\Produit;

use Darryldecode\Cart\Cart ;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\App;

class PanierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ajoutpanier(Request $request)
    {
        $produit=Produit::find($request->produit_id);
         \Cart::add(array(
             'id' => $produit->id,
           'name' => $produit->nom,
           'price' => $produit->Prix,
           'qty' => $request->quantité,
           
          
         ))->associate('App\Produit');
        
        // Cart::add($request->produit_id, $request->produit->nom,$request->produit->prix,$request->quantité )
        // // ->associate('App\Produit');
        return redirect()->route('showproduit',['slug'=> $produit->slug])->with('success','produit ajouter au panier');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
