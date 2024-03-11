<x-layout>
    <x-slot:title>
        {{ $cocktail['strDrink'] }} Details
    </x-slot>

    <div class="container mt-5">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-6">
                    <img src="{{ $cocktail['strDrinkThumb'] }}" class="img-fluid rounded-start" alt="{{ $cocktail['strDrink'] }}" style="width: 100%; height: auto;">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h1 class="card-title">{{ $cocktail['strDrink'] }}</h1>
                        <p class="text-muted">{{ $cocktail['strCategory'] }} | {{ $cocktail['strAlcoholic'] }} | Served in a {{ $cocktail['strGlass'] }}</p>

                        <h3>Ingredients</h3>
                        <ul>
                            @for ($i = 1; $i <= 15; $i++)
                                @php
                                    $ingredient = $cocktail['strIngredient'.$i];
                                    $measure = $cocktail['strMeasure'.$i];
                                @endphp
                                @if ($ingredient)
                                    <li>{{ $measure }} {{ $ingredient }}</li>
                                @endif
                            @endfor
                        </ul>

                        <h3>Instructions</h3>
                        <p>{{ $cocktail['strInstructions'] }}</p>
                        <a href="{{ url('/') }}" class="btn btn-outline-secondary">Go Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
