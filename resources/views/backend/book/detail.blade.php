@extends('backend.layout')

@section('content')
 <div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Book Detail</h1>
    <h2> {{( $book->name)}} </h2>
    <h2> {{( $book->author->name)}} </h2>
    <h2> {{( $book->description)}} </h2>

    
    {{-- images --}}
    <img src="{{ asset($book->image)}}" alt="Book Image" class="img-fluid">

@endsection