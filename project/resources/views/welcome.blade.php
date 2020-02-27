@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-2">
            <!-- Post 1 -->
            <div class="col-md-6">
                <div class="row border mb-4 shadow-sm h-md-250">
                    <div class="col p-4 d-flex flex-column position-static">
                        <h3 class="mb-0">Title</h3>
                        <div class="mb-1 text-muted">Date</div>
                        <p class="card-text mb-auto">Some content limited to 200 characters...</p>
                        <a href="#" class="stretched-link">Voir le post</a>
                    </div>
                    <div class="d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" src="https://www.webnode.com/blog/wp-content/uploads/2016/10/Blog-intro.jpg">
                    </div>
                </div>
            </div>
            <!-- End Post 1 -->
        </div>
    </div>
@endsection
