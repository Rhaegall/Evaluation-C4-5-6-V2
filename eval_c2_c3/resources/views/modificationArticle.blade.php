
@extends('layout')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Modofication d'article</h1>
            </div>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nom</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ex: Liquide vaisselle">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Catégorie</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ex:Produits ménagers">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Quantité</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ex: 12">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Unité</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ex: Unités">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Prix de Vente</label>
                    <input type="text"l class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ex: 1.23€">
                </div>
                <button type="submit" class="btn btn-primary">Créer</button>
                <!--<p><a href="accueil">Retour à l'Accueil</a></p>-->
            </form>
        </div>
    </div>
@endsection