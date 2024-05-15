@extends('layouts.app')

@section('content')
<div>
    <a href="{{ route('note.index')}}">Back</a>
</div>
<br/>
    <form method="POST" action="{{ route('note.insert')}}" >
        @csrf
        <label for="">Title</label>
        <input type="text" name="title" />

        <label for="">Descriptions</label>
        <input type="text" name="description"/>

        <input type="submit" value="Create">
    </form>
@endsection
