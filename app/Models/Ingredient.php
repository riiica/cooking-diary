<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $table = 'ingredient';

    public function getIngredientByRecipeId($recipeId)
    {
        return $this::where(["recipe_id" => $recipeId])->get();
    }
}
