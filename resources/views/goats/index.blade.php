   @extends('layout')
   @section('main')
   <h1> All the goats <a href="/goats/create">+</a></h1>
<table>
<tr>
        <th>id</th>
        <th>name</th>
        <th>price</th>
        <th>color</th>
        <th>sex</th>
        <th>birthday</th>
        <th>lien</th>
        <th>mettre a jour</th>
        <th>delete</th>
</tr>
        @foreach($goats as $goat)
<tr>
        <td>{{$goat->id}}</td>
        <td>{{$goat->name}}</td>
        <td>{{$goat->price}}</td>
        <td>{{$goat->color}}</td>
        <td>{{$goat->sex ? 'Female' : 'Male'}}</td>
        <td>{{$goat->birthday}}</td>
        <td><a href ="goats/{{$goat->id}}">voir</a></td>
        <td><a href ="goats/{{$goat->id}}/edit">mettre a jour</a></td>
        <td><form method="post" action="/goats/{{$goat->id}}">
                @method("DELETE")
                @csrf
                <button>X delete</button>
        </form></td>
</tr>
        @endforeach
</table>
@endsection