@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-2">
            <div class="col-md-12 blog-main">
                <div class="row border-bottom mb-4">
                    <div class="col-md-8">
                        <h3 class="pb-4 font-italic">
                            Article #[ID]
                        </h3>
                    </div>
                    <!-- Only for the creator of the post -->
                    <div class="col-md-4 text-right">
                        <form>
                            <a class="btn btn-outline-primary" href="{{ route('posts.edit', $post) }}">Modifier</a>
                            <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                        </form>
                    </div>
                    <!-- End: Only for the creator of the post -->
                </div>

                <div class="blog-post">
                    <h2 class="blog-post-title">[Article title]</h2>
                    <p class="blog-post-meta">[Date], par <a href="#">[Author]</a></p>
                    <p>Content</p>
                </div>
            </div>
        </div>
    </div>
@endsection
