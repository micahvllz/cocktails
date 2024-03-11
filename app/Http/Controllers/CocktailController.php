<?php

namespace App\Http\Controllers;

use App\Services\CocktailService;
use Illuminate\Http\Request;

class CocktailController extends Controller
{
    public function __construct(private CocktailService $cocktailService)
    {
    }

    public function index()
    {
        $cocktails = $this->cocktailService->getAllCocktails();
        return view('index', ['cocktails' => $cocktails]);
    }

    public function show($id)
    {
        $cocktail = $this->cocktailService->getCocktailDetails($id);
        if (!$cocktail) {
            abort(404);
        }
        return view('show', ['cocktail' => $cocktail]);
    }
}
