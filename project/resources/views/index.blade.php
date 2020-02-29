@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-2">
            @if ($posts_list->count() > 0)
                @foreach ($posts_list as $post)
                <!-- Post {{ $post->id }} -->
                <div class="col-md-6">
                    <div class="row border mb-4 shadow-sm h-md-250">
                        <div class="col p-4 d-flex flex-column position-static">
                            <h3 class="mb-0">{{ $post->title }}</h3>
                            <div class="mb-1 text-muted">{{ $post->created_at->diffForHumans() }}</div>
                            <p class="card-text mb-auto">{!! Str::limit($post->content, 200, ' ...') !!}</p>
                            <a href="{{ route('posts.show', $post) }}" class="stretched-link">Voir le post</a>
                        </div>
                        <div class="d-lg-block">
                            <img class="bd-placeholder-img" width="200" height="250" src="https://www.webnode.com/blog/wp-content/uploads/2016/10/Blog-intro.jpg">
                        </div>
                    </div>
                </div>
                <!-- End Post {{ $post->id }} -->
                @endforeach
            @else
                <div class="col-md-12">
                    <div class="alert alert-info" role="alert">
                        Aucun post n'a été publié sur le blog!
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
