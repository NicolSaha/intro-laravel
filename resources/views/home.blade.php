@extends ('layouts.layout')

@section('content')
<div class="section features-1 justify-center text-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="ol-md-8 mx-auto text-center">
                <img src="assets/img/cocktailbar.jpg" class="img-fluid my-4 rounded" alt="Cocktail Bar Picture">
                <h2 class="display-3 text-warning">Menu</h2>
                <br/>
                <div class="info info-horizontal info-hover-primary">
                    <div class="description">
                        <h5 class="title">Sunrise Mimosa</h5>
                        <p> <strong> Ingredients:</strong> pineapple juice, orange juise, lime juice, sliced pineapple, sliced orange, sliced lemon, Processo, and Campari</p>
                        <a href="/reviews" class="text-success">Review</a>
                    </div>
                </div>
                <div class="info info-horizontal info-hover-primary mt-5">
                    <div class="description">
                        <h5 class="title">Grilled Pineapple Paloma</h5>
                        <p> <strong>Ingredients:</strong> club soda, sliced lemon, sliced grapefruit, sugar, salt, ice cubes, tequila </p>
                        <a href="/reviews" class="text-success">Review</a>
                    </div>
                </div>
                <div class="info info-horizontal info-hover-primary mt-5">
                    <div class="description">
                        <h5 class="title">Mojito</h5>
                        <p> <strong>Ingredients:</strong> carbonated water, sugar, lime wedges, lemon flavored rum, ice cubes, mint leaves </p>
                        <a href="/reviews" class="text-success">Review</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
