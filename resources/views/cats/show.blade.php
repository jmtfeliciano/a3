@extends('layouts.master')


section('cat')
     You are a: {{$catresult}}
@endsection

@section('content')
     <h1>You are a:  {{$catresult}}
@endsection
