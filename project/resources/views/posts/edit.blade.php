@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="py-5 text-center">
            <h2>Edition d'un article</h2>
            <p class="lead">Article #[ID]</p>
        </div>

        <form>
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="title">Titre</label>
                        <input type="text" id="title" name="title" value="[VALUE TITLE]" placeholder="Entrez le titre de votre article..." required="required" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="content">Contenu</label>
                        <textarea id="content" name="content" placeholder="Entrez le contenu de votre article..." rows="10" required="required" class="form-control">[VALUE CONTENT]</textarea>
                    </div>
                </div>
                <div class="col-md-12 text-right">
                    <button type="reset" class="btn btn-outline-secondary">Annuler</button>
                    <button type="submit" class="btn btn-outline-primary">Editer l'article</button>
                </div>
            </div>
        </form>
    </div>
@endsection
