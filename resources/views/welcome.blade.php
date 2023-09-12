
@extends('layout.app')
@section('content')
<div class="container mt-4">
    <h1>Welcome to Health Mind Blog</h1>
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="row">
        @if($blogPosts)
        @foreach ($blogPosts as $post)
        <div class="col-md-4">
            <div class="blog-post">
                <h2 class="blog-post-title">{{ $post->title }}</h2>
                <p>{{ $post->content }}</p>
                <p class="blog-post-meta">Added by {{ @$post->user->name }} on {{ $post->created_at->format('F j, Y') }}</p>
            </div>
        </div>
        @endforeach
        @endif
    </div>
    
</div>
@endsection