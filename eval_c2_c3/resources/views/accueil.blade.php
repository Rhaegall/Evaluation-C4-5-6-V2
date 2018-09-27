
@extends('layout')

@section('main')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="statistical">
                        <a href="statistique">Statistiques</a>
                    </div>
                    <div class="historical">
                        <a href="historique">Historique</a>
                    </div>
                    <div class="motionCapture">
                        <a href="saisieMovement">Saisie de mouvement</a>
                    </div>
                    <div class="articleList">
                        <a href="listeArticle">Liste d'articles</a>
                    </div>
                    <div class="articleCreation">
                        <a href="creationArticle">Création d'articles</a>
                    </div>
                    <div class="articleModification">
                        <a href="modificationArticle">Modification d'articles</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
