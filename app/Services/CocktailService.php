<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class CocktailService
{
    protected $baseUrl = 'https://www.thecocktaildb.com/api/json/v1/1';

    public function getAllCocktails()
    {
        $alphabet = range('a', 'z');
        $randomLetter = $alphabet[array_rand($alphabet)];
        $response = Http::get("{$this->baseUrl}/search.php?f={$randomLetter}");

        return $response->json()['drinks'] ?? [];
    }

    public function getCocktailDetails($id)
    {
        $response = Http::get("{$this->baseUrl}/lookup.php?i={$id}");
        return $response->json()['drinks'][0] ?? null;
    }
}
