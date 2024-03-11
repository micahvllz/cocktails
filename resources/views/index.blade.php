<x-layout>
    <x-slot:title>
        🍸 Cocktails Galore 🥂
    </x-slot>

    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="display-4">Discover Your Favorite Cocktail</h1>
            <p class="lead text-muted">Explore a world of flavors and find your perfect mix.</p>
        </div>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
            @foreach($cocktails as $cocktail)
                <div class="col">
                    <div class="card card-hover shadow">
                        <div class="card-img-top overflow-hidden">
                            <img src="{{ $cocktail['strDrinkThumb'] }}" alt="{{ $cocktail['strDrink'] }}" class="img-fluid" style="min-height: 250px; object-fit: cover;">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $cocktail['strDrink'] }}</h5>
                            <a href="{{ route('cocktails.show', $cocktail['idDrink']) }}" class="btn btn-primary stretched-link">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f8f9fa;
        }

        .card-hover {
            transition: transform .2s;
            cursor: pointer;
        }

        .card-hover:hover {
            transform: scale(1.05);
            z-index: 10;
        }

        .stretched-link::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1;
            pointer-events: auto;
            content: "";
            background-color: rgba(0,0,0,0);
        }
    </style>
</x-layout>
