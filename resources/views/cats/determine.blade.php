@extends('layouts.master')

@section('cat')
    Determine Which Cat You Are!
@endsection

@section('content')
    <h1>Add a new book</h1>

    <form method='POST' action='/show'>
        {{ csrf_field() }}

        <label for='name'>Enter your name:</label>
        <input type='text' name='name' id='name' value='{{ old('name') }}'>

        <label for='name'>Enter your str:</label>
        <input type='text' name='str' id='str' value='{{ old('str') }}'>


        <input type='submit' class='btn btn-primary' value='Click To Determine Which Cat You Are!'>

    </form>

@endsection
