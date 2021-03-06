<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Ingredient;
use App\Models\Step;

class CookingController extends Controller
{

  public function menu()
    {
        // ログインしていたら、test/menuを表示
        if (Auth::check()) {
            return view('menu');
        } else {
            // ログインしていなかったら、Login画面を表示
            return view('auth/login');
        }
    }

  protected $recipes;
  protected $ingredients;
  protected $steps;

  public function __construct(
    Recipe $recipes,
    Ingredient $ingredients,
    Step $steps
  )
  {
    $this->recipes = $recipes;
    $this->ingredients = $ingredients;
    $this->steps = $steps;
  }

  public function index() {
    $recipes = DB::table('recipe')->get();
    return view('welcome',['recipes' => $recipes]);
  }

  public function side() {
    $recipes = DB::table('recipe')->get();
    return view('side_dish',['recipes' => $recipes]);
  }

  public function add() {
    return view('add_data');
  }

  public function detail(Request $request, $id) {
    $recipe = $this->recipes->getRecipeById($id);
    $ingredients =  $this->ingredients->getIngredientByRecipeId($id);
    $steps = $this->steps->getStepByRecipeId($id);

    return view('detail',['recipe' => $recipe ,'ingredients' => $ingredients , 'steps' => $steps]);
  }
}

