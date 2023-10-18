@extends('layout')
@section('main')
        <h1> Just one goat </h1>
<ul>
        <li>{{$goat['id']}}</li>
        <li>{{$goat['nom']}}</li>
        <li>{{$goat['prix']}}</li>
</ul>
@endsection