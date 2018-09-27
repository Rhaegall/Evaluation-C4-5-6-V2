
@extends('layout')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Statistique</h1>
            </div>
        </div>
        <div>
            <div class="caption d-flex justify-content-around">
                <label>Valeur de la catégorie Alimentation : <input id="food" type="text" placeholder="ex: 100"></label>
            </div>
            <div class="caption d-flex justify-content-around">
                <label>Valeur de la catégorie Boisson : <input id="drinks" type="text" placeholder="ex: 150"></label>
            </div>
            <div class="caption d-flex justify-content-around">
                <label>Valeur de la catégorie Produits ménagers: <input id="products" type="text" placeholder="ex: 100"></label>
            </div>
            <div class="caption d-flex justify-content-around">
                <label>Valeur totale du stock : <input id="stock" type="text" placeholder="ex: 350"></label>
            </div>
            <!--<p><a href="accueil">Retour à l'Accueil</a></p>-->
        </div>
    </div>
@endsection