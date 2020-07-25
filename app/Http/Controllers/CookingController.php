<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CookingController extends Controller
{
    public function index() {
      $recipes = DB::table('recipe')->get();
      return view('welcome',['recipes' => $recipes]);
      }

    public function side() {
        $recipes = DB::table('recipe')->get();
        return view('side_dish',['recipes' => $recipes]);
        }

    public function detail(Request $request, $id) {
        $recipes = DB::table('recipe')->get();
        //$recipeData = $recipes->whereRaw('`recipe_id` = id')->get();
        $ingredients = DB::table('ingredient')->get();
        $steps = DB::table('step')->get();

        return view('detail',['recipes' => $recipes ,'ingredients' => $ingredients , 'steps' => $steps]);
      }
    }

