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
        @error('title')
            <p style="color: red">{{ $message }}</p>
        @enderror
<br/>
        <label for="">Descriptions</label>
        <input type="text" name="description"/>

        @error('description')
            <p style="color: red">{{ $message }}</p>
        @enderror

        <input type="submit" value="Create">
    </form>
@endsection
