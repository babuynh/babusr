@extends('admin.layout.app')

@section('content')
<div class="app-content">
<div class="container">
    <h1>Blog Posts</h1>
    <a href="{{ route('blogs.create') }}" class="btn btn-primary">Create Blog Post</a>
    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogPosts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>
                        <a href="{{ route('blogs.edit', $post->id) }}" class="btn btn-success">Edit</a>
                        <form action="{{ route('blogs.destroy', $post->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection
