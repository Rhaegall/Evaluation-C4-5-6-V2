
@extends('layout')

@section('main')

    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Historique</h1>
            </div>
            <div class="col-12 text-center">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Type de mouvement</th>
                        <th scope="col">Sens du mouvement</th>
                        <th scope="col">Article</th>
                        <th scope="col">Quantité</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">10/10/2017</th>
                        <td>Achat</td>
                        <td>Entrée</td>
                        <td>Eau Minérale</td>
                        <td>10</td>
                      </tr>
                      <tr>
                        <th scope="row">10/11/2017</th>
                        <td>Vente</td>
                        <td>Sortie</td>
                        <td>Spaghetti</td>
                        <td>100</td>
                      </tr>
                      <tr>
                        <th scope="row">10/12/2017</th>
                        <td>Achat</td>
                        <td>Entrée</td>
                        <td>Serpillière</td>
                        <td>100</td>
                      </tr>
                      <tr>
                        <th scope="row">10/02/2018</th>
                        <td>Vente</td>
                        <td>Sortie</td>
                        <td>Coca Cola</td>
                        <td>10</td>
                      </tr>
                      <tr>
                        <th scope="row">10/03/2018</th>
                        <td>Vente</td>
                        <td>Sortie</td>
                        <td>Baguette</td>
                        <td>50</td>
                      </tr>
                      <tr>
                        <th scope="row">10/04/2018</th>
                        <td>Achat</td>
                        <td>Entrée</td>
                        <td>Eponge</td>
                        <td>100</td>
                      </tr>
                      <!--<p><a href="accueil">Retour à l'Accueil</a></p>-->
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    
@endsection