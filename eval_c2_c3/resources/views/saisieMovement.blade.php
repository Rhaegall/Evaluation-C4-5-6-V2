
@extends('layout')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Saisie de mouvement</h1>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Type de mouvement</th>
                        <th scope="col">Sens du mouvement</th>
                        <th scope="col">Article</th>
                        <th scope="col">Quantité</th>
                    </tr>
                    <tbody>
                        <tr>
                            <td>Achat</td>
                            <td>Entrée</td>
                            <td>Eau Minérale</td>
                            <td>100</td>
                        </tr>
                        <tr>
                            <td>Vente</td>
                            <td>Sortie</td>
                            <td>Baguette</td>
                            <td>25</td>
                        </tr>
                        <tr>
                            <td>Perte</td>
                            <td>Sortie</td>
                            <td>Eponge</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>Vol</td>
                            <td>Sortie</td>
                            <td>Coca Cola</td>
                            <td>6</td>
                        </tr>
                        <!--<p><a href="accueil">Retour à l'Accueil</a></p>-->
                    </tbody>
                </thead>
            </table>
        </div>
    </div>
@endsection