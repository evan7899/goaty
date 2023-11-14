@extends('layout')
@section('main')
        <h1> Just one goat </h1>
<ul>
        <li>{{$goat->id}}</li>
        <li>{{$goat->name}}</li>
        <li>{{$goat->price}}</li>
        <li>{{$goat->color}}</li>
        <li>{{$goat->sex}}</li>
        <li>{{$goat->birthday}}</li>
        <li>{{$goat->created_at}}</li>
        <li>{{$goat->updated_at}}</li>
</ul>
<a href="/goats">Go back to the GOATS</a>
@endsection