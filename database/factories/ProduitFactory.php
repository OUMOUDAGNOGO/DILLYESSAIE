<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nom=$this->faker->sentence(4);
        return [
            "slug"=>Str::slug($nom),
            "nom"=>$nom,

            "description"=>$this->faker->paragraph(),
            "prix"=>rand(15000,20000),
            "quantité"=>rand(10,20),
            "active"=>$this->faker->boolean(),
            "image" => $this->faker->imageUrl($width=640, $heith=480,'fashion'),
            "categorie_id" =>rand(1,3)
        ];
    }
}
