@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="py-5 text-center">
            <h2>Publication d'un article</h2>
            <p class="lead">Remplir ce formulaire pour voir son article publié.</p>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <b>Erreurs:</b>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            @method('POST')
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="title">Titre</label>
                        <input type="text" id="title" name="title" placeholder="Entrez le titre de votre article..." required="required" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="title">Contenu</label>
                        <textarea id="content" name="content" placeholder="Entrez le contenu de votre article..." rows="10" required="required" class="form-control"></textarea>
                    </div>
                </div>
                <div class="col-md-12 text-right">
                    <button type="reset" class="btn btn-outline-secondary">Annuler</button>
                    <button type="submit" class="btn btn-outline-primary">Publier l'article</button>
                </div>
            </div>
        </form>
    </div>
@endsection
