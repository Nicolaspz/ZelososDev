@extends('layouts.main')
@section('content')


<a class="btn btn-primary col-md-4" href="/create">Nova agenda</a>

<div style="padding: 8px;">
    <table  class="table align-items-center table-flush" >
        <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Date</th>
                <th scope="col">Opctions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Agendas as $agenda)
            <tr>
                <td> {{$agenda->id}} </td>
                <td>{{$agenda->title}}</td>
                <td>{{$agenda->description}}</td>
                <td>{{$agenda->date}}</td>
                <td> <form action="{{route('agenda.delete', ['id'=>$agenda->id]) }}" method="POST">
                    @csrf
                    <button class="btn btn-danger" type="submit">Eliminar</button>
                </form>
                    <a class="btn btn-primary" href="/edit/{{$agenda->id}}">Actualizar</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
