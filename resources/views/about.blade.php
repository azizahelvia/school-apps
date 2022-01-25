@extends('layouts.app')
@section('content')

    <h1>Ini adalah halaman about</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="{{ $image }}" 
    alt="{{ $alt }}" width="300">

@endsection