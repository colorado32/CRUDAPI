@extends('layouts.app')

@section('content')
    <a href="{{ route('note.index')}}">Back</a>
    <br/>
    <h1>{{ $note->title }}</h1>
    <h2>{{ $note->description }}</h2>
@endsection
