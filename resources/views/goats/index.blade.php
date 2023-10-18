   @extends('layout')
   @section('main')
   <h1> All the goats </h1>
<table>
<tr>
        <th>id</th>
        <th>nom</th>
        <th>prix</th>
        <th>lien</th>
</tr>
        @foreach($goats as $goat)
<tr>
        <td>{{$goat['id']}}</td>
        <td>{{$goat['nom']}}</td>
        <td>{{$goat['prix']}}</td>
        <td><a href ="goats/{{$goat['id']}}">voir</a></td>
</tr>
        @endforeach
</table>
@endsection