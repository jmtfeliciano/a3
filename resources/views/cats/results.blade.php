@extends('layouts.master')

@section('cat')
    You are a {{$results}} cat!
@endsection

@section('content')

     <h2>RESULTS<h2>



     @if ($results=="british")
          <h3>{{$name}}, you are a British Short Hair Cat! </h3><br>
     @elseif($results=="abyssinian")
          <h3>{{$name}}, you are an Abyssinian cat! </h3>
     @elseif($results=="siamese")
          <h3>{{$name}}, you are a Siamese cat! </h3>
     @elseif($results=="bengal")
          <h3>{{$name}}, you are a Bengal cat! </h3>
     @elseif($results=="maine")
          <h3>{{$name}}, you are a Maine cat! </h3>
     @else
          <h3>{{$name}}, you are a Persian cat! </h3>
     @endif

     <!--  Breed Description is passed via the CatController  -->
     <h4>{{$breedDescription}}</h4><br><br><br>


     <h3>Acknowledgment:</h3><br>
     <img src="/photos/catcalculation.jpg" alt="Cat On A Computer"><br><br>
     <p>My human made me do all the work.  But our breed descriptions were retrieved from cattime.com ... </p>



@endsection
