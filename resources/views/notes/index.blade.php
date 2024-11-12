@extends('layouts.layout')

@section('content')
    <h1>Notes</h1>
    <a href="{{ route('notes.create') }}" class="btn btn-primary mb-3">Create Note</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($notes as $note)
                <tr>
                    <td>{{ $note->id }}</td>
                    <td>{{ $note->name }}</td>
                    <td>{{ $note->description }}</td>
                    <td>{{ $note->created_at->timezone('Asia/Kuala_Lumpur')->format('Y-m-d H:i:s') }}</td>  
                    <td>{{ $note->updated_at->timezone('Asia/Kuala_Lumpur')->format('Y-m-d H:i:s') }}</td> 
                    <td>
                        <a href="{{ route('notes.edit', $note) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('notes.destroy', $note) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
