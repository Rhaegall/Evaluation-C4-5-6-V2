
@extends('layout')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Liste d'articles</h1>
            </div>
            <div class="list-group">

                @foreach ($articles as $article)
                    <li>
                        <a href="modificationArticle">{{ $article->name }}</a>
                        <button type="button" class="btn btn-danger">X</button>
                    </li>
                @endforeach
            </div>
            <a href="creationArticle"><button type="button" class="btn btn-success">Créer un nouvel article</button></a>
        </div>
    </div>
            