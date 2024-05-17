@extends('layouts.app')

@section('content')
<div>
    <a href="{{ route('note.create')}}">Create new Note</a>
</div>
<ul>
    @forelse ($notes as $note )
        <li><a href="{{route('note.show', $note->id )}}">{{ $note->title }}</a> | <a href="{{ route('note.edit', $note->id)}}">Edit</a> |
            <form action="{{route('note.destroy', $note->id )}}" method="POST">
                @method('delete')
                @csrf
                <input type="submit" value="Delete">
                </form>

    @empty
        <p>No Title </p>
    @endforelse
</ul>

@endsection
