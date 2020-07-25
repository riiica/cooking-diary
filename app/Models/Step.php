<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    protected $table = 'step';

    public function getStepByRecipeId($recipeId)
    {
        return $this::where(["recipe_id" => $recipeId])->get();
    }
}
