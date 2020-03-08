@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-2">
            <div class="col-md-12 blog-main">
                <div class="row border-bottom mb-4">
                    <div class="col-md-8">
                        <h3 class="pb-4 font-italic">
                            Article #{{ $post->id }}
                        </h3>
                    </div>
                    <!-- Only for the creator of the post -->
                    <div class="col-md-4 text-right">
                        <form action="{{ route('posts.destroy', $post) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a class="btn btn-outline-primary" href="{{ route('posts.edit', $post) }}">Modifier</a>
                            <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                        </form>
                    </div>
                    <!-- End: Only for the creator of the post -->
                </div>

                <div class="blog-post">
                    <h2 class="blog-post-title">{{ $post->title }}</h2>
                    <p class="blog-post-meta">{{ $post->created_at }}, par <a href="#">{{ $post->user->name }}</a></p>
                    <p>{{ $post->content }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
