@extends('layouts.app')

@section('content')
<div>
    <a href="{{ route('note.create')}}">Create new Note</a>
</div>
<ul>
    @forelse ($notes as $note )
        <li><a href="#">{{ $note->title }}</a> | <a href="{{ route('note.edit', $note->id)}}">Edit</a> | <a href="">Delete</a></li>

    @empty
        <p>No Title </p>
    @endforelse
</ul>

@endsection
