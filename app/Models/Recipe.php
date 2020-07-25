<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $table = 'recipe';

    public function getAllRecipes()
    {
        return $this::get();
    }

    public function getRecipeById($recipeId)
    {
        return $this::where(["recipe_id" => $recipeId])->first();
    }
}
