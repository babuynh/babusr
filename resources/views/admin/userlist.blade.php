@extends('admin.layout.app')

@section('content')
<div class="app-content">
<div class="container">
    

    <div class="user-list">
        <h2>User List</h2>
        <table class="table">
            <thead>
                @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Email Verification</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if (!$user->is_verify)
                            <form method="POST" action="{{ route('admin.verify.email', ['user' => $user->id]) }}">
                                @csrf
                                <button type="submit" class="btn btn-primary">Verify Email</button>
                            </form>
                        @else
                            <span class="text-success">Verified</span>
                        @endif
                    </td>
                    <td>{{$user->role}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection
